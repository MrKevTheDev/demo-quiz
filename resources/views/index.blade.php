<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The quiz of being wrong in interesting ways</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body class="text-center">

<div id="app" class="cover-container d-flex h-100 p-3 mx-auto flex-column">


</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mithril/1.1.7/mithril.min.js" crossorigin="anonymous"></script>
</body>


<script>
    const root = document.getElementById('app')

    class Question {
        question = '';
        answers = [];
        type = '';
        answer;

        constructor(question, answers, type, hint) {
            this.question = question;
            this.answers = answers;
            this.type = type;
            this.hint = hint;
        }

        isCorrect() {
            return true;
        }
    }

    const List = {
        view: (vnode) => {
            return vnode.attrs.question.answers?.map((answer) => {
                    return m("ul", {"class": "list-group list-group-flush"},
                        m('li.list-group-item', [
                            m("label", {"id": "a0"},
                                answer
                            ),
                            m("input", {"type": "radio"})
                        ])
                    )
                }
            )
        }
    }

    const Load = {
        view: () => {
            return m("div", {"class": "container d-flex justify-content-center",},
                m('fa-3x',
                    m('span.fas fa-cog fa-spin fa-4x')
                ),
            )
        }
    }
    const Form = {
        step: 1,
        isLoading: true,
        question: new Question('', []),
        getQuestion: () => {
            m.request({
                method: "GET",
                url: `/question/${Form.step}`,
                headers: {
                    'X-CSRF-Token': window.CSRF_TOKEN_INPUT,
                },
                withCredentials: true,
            }).then((result) => {
                Form.question = new Question(result.question, result.answers, result.type, result.hint)
                Form.isLoading = false;
            })
        },
        oninit: () => {
            Form.getQuestion();
        },
        view: () => {
            if (Form.isLoading) {
                return m(Load);
            }

            return m("div", {"class": "container col d-flex justify-content-center",},
                m("div", {"class": "card col d-flex justify-content-center",},
                    m("div", {"class": "card-body"},
                        [
                            m("h5", {"class": "card-title"},
                                Form.question.question
                            ),
                            m("h6", {"class": "card-subtitle mb-2 text-muted"},
                                "Card subtitle"
                            ),
                            m(List, {question: Form.question}),
                            m('.card-body',
                                m('button.btn.btn-primary.btn-lg.btn-block ',
                                    {
                                        onclick: () => {
                                            Form.step++
                                            Form.isLoading = true;
                                            Form.getQuestion();
                                        }
                                    },
                                    'submit')
                            )
                        ]
                    )
                )
            )
        }
    }


    m.route(root, "/", {
        "/": Form,
    })
</script>
</html>
