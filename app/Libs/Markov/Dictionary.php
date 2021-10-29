<?php

namespace App\Libs\Markov;
class Dictionary
{
    static function get()
    {
        return <<<EOF
 Creating a copy of an object with fully replicated properties is not always the wanted behavior. A good example of the need for copy constructors, is if you have an object which represents a GTK window and the object holds the resource of this GTK window, when you create a duplicate you might want to create a new window with the same properties and have the new object hold the resource of the new window. Another example is if your object holds a reference to another object which it uses and when you replicate the parent object you want to create a new instance of this other object so that the replica has its own separate copy.
An object copy is created by using the clone keyword (which calls the object's __clone() method if possible).
  Once the cloning is complete, if a __clone() method is defined, then the newly created object's __clone() method will be called, to allow any necessary properties that need to be changed.
When an object is cloned, PHP will perform a shallow copy of all of the object's properties. Any properties that are references to other variables will remain references.
I think it's relevant to note that __clone is NOT an override. As the example shows, the normal cloning process always occurs, and it's the responsibility of the __clone method to action performed by it.
 Here is test script i wrote to test the behaviour of clone when i have arrays with primitive values in my class - as an additonal test of the note below by jeffrey at whinger dot nl
  I ran into the same problem of an array of objects inside of an object that I wanted to clone all pointing to the same objects. However, I agreed that serializing the data was not the answer. It was relatively simple, really:
Note, that I was working with a multi-dimensional array and I was not using the Key=>Value pair system, but basically, the point is that if you use foreach, you need to specify that the copied data is to be accessed by reference.
Another gotcha I encountered: like __construct and __desctruct, you must call parent::__clone() yourself from inside a child's __clone() function. The manual kind of got me on the wrong foot here:


EOF;
    }

    static function alice()
    {
        return "ADVENTURES IN WONDERLANDI—DOWN THE RABBIT-HOLEAlice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do. Once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, \and what is the use of a book,\ thought Alice, \without pictures or conversations?\So she was considering in her own mind (as well as she could, for the day made her feel very sleepy and stupid), whether the pleasure of making a daisy-chain would be worth the trouble of getting up and picking the daisies, when suddenly a White Rabbit with pink eyes ran close by her.There was nothing so very remarkable in that, nor did Alice think it so very much out of the way to hear the Rabbit say to itself, \Oh dear! Oh dear! I shall be too late!\ But when the Rabbit actually took a watch out of its waistcoat-pocket and looked at it and then hurried on, Alice started to her feet, for it flashed across her mind that she had never before seen a rabbit with either a waistcoat-pocket, or a watch to take out of it, and, burning with curiosity, she ran across the field after it and was just in time to see it pop down a large rabbit-hole, under the hedge. In another moment, down went Alice after it!The rabbit-hole went straight on like a tunnel for some way and then dipped suddenly down, so suddenly that Alice had not a moment to think about stopping herself before she found herself falling down what seemed to be a very deep well.Either the well was very deep, or she fell very slowly, for she had plenty of time, as she went down, to look about her. First, she tried to make out what she was coming to, but it was too dark to see anything; then she looked at the sides of the well and noticed that they were filled with cupboards and book-shelves; here and there she saw maps and pictures hung upon pegs. She took down a jar from one of the shelves as she passed. It was labeled \ORANGE MARMALADE,\ but, to her great disappointment, it was empty; she did not like to drop the jar, so managed to put it into one of the cupboards as she fell past it.Down, down, down! Would the fall never come to an end? There was nothing else to do, so Alice soon began talking to herself. \Dinah'll miss me very much to-night, I should think!\ (Dinah was the cat.) \I hope they'll remember her saucer of milk at tea-time. Dinah, my dear, I wish you were down here with me!\ Alice felt that she was dozing off, when suddenly, thump! thump! down she came upon a heap of sticks and dry leaves, and the fall was over.Alice was not a bit hurt, and she jumped up in a moment. She looked up, but it was all dark overhead; before her was another long passage and the White Rabbit was still in sight, hurrying down it. There was not a moment to be lost. Away went Alice like the wind and was just in time to hear it say, as it turned a corner, \Oh, my ears and whiskers, how late it's getting!\ She was close behind it when she turned the corner, but the Rabbit was no longer to be seen.She found herself in a long, low hall, which was lit up by a row of lamps hanging from the roof. There were doors all 'round the hall, but they were all locked; and when Alice had been all the way down one side and up the other, trying every door, she walked sadly down the middle, wondering how she was ever to get out again.Suddenly she came upon a little table, all made of solid glass. There was nothing on it but a tiny golden key, and Alice's first idea was that this might belong to one of the doors of the hall; but, alas! either the locks were too large, or the key was too small, but, at any rate, it would not open any of them. However, on the second time 'round, she came upon a low curtain she had not noticed before, and behind it was a little door about fifteen inches high. She tried the little golden key in the lock, and to her great delight, it fitted!Alice opened the door and found that it led into a small passage, not much larger than a rat-hole; she knelt down and looked along the passage into the loveliest garden you ever saw. How she longed to get out of that dark hall and wander about among those beds of bright flowers and those cool fountains, but she could not even get her head through the doorway. \Oh,\ said Alice, \how I wish I could shut up like a telescope! I think I could, if I only knew how to begin.\Alice went back to the table, half hoping she might find another key on it, or at any rate, a book of rules for shutting people up like telescopes. This time she found a little bottle on it (\which certainly was not here before,\ said Alice), and tied 'round the neck of the bottle was a paper label, with the words \DRINK ME\ beautifully printed on it in large letters.\No, I'll look first,\ she said, \and see whether it's marked 'poison' or not,\ for she had never forgotten that, if you drink from a bottle marked \poison,\ it is almost certain to disagree with you, sooner or later. However, this bottle was not marked \poison,\ so Alice ventured to taste it, and, finding it very nice (it had a sort of mixed flavor of cherry-tart, custard, pineapple, roast turkey, toffy and hot buttered toast), she very soon finished it off.\What a curious feeling!\ said Alice. \I must be shutting up like a telescope!\And so it was indeed! She was now only ten inches high, and her face brightened up at the thought that she was now the right size for going through the little door into that lovely garden.After awhile, finding that nothing more happened, she decided on going into the garden at once; but, alas for poor Alice! When she got to the door, she found she had forgotten the little golden key, and when she went back to the table for it, she found she could not possibly reach it: she could see it quite plainly through the glass and she tried her best to climb up one of the legs of the table, but it was too slippery, and when she had tired herself out with trying, the poor little thing sat down and cried.\Come, there's no use in crying like that!\ said Alice to herself rather sharply. \I advise you to leave off this minute!\ She generally gave herself very good advice (though she very seldom followed it), and sometimes she scolded herself so severely as to bring tears into her eyes.Soon her eye fell on a little glass box that was lying under the table: she opened it and found in it a very small cake, on which the words \EAT ME\ were beautifully marked in currants. \Well, I'll eat it,\ said Alice, \and if it makes me grow larger, I can reach the key; and if it makes me grow smaller, I can creep under the door: so either way I'll get into the garden, and I don't care which happens!\She ate a little bit and said anxiously to herself, \Which way? Which way?\ holding her hand on the top of her head to feel which way she was growing; and she was quite surprised to find that she remained the same size. So she set to work and very soon finished off the cake.II—THE POOL OF TEARS\Curiouser and curiouser!\ cried Alice (she was so much surprised that for the moment she quite forgot how to speak good English). \Now I'm opening out like the largest telescope that ever was! Good-by, feet! Oh, my poor little feet, I wonder who will put on your shoes and stockings for you now, dears? I shall be a great deal too far off to trouble myself about you.\Just at this moment her head struck against the roof of the hall; in fact, she was now rather more than nine feet high, and she at once took up the little golden key and hurried off to the garden door.Poor Alice! It was as much as she could do, lying down on one side, to look through into the garden with one eye; but to get through was more hopeless than ever. She sat down and began to cry again.She went on shedding gallons of tears, until there was a large pool all 'round her and reaching half down the hall.After a time, she heard a little pattering of feet in the distance and she hastily dried her eyes to see what was coming. It was the White Rabbit returning, splendidly dressed, with a pair of white kid-gloves in one hand and a large fan in the other. He came trotting along in a great hurry, muttering to himself, \Oh! the Duchess, the Duchess! Oh! won't she be savage if I've kept her waiting!\When the Rabbit came near her, Alice began, in a low, timid voice, \If you please, sir—\ The Rabbit started violently, dropped the white kid-gloves and the fan and skurried away into the darkness as hard as he could go.Alice took up the fan and gloves and she kept fanning herself all the time she went on talking. \Dear, dear! How queer everything is to-day! And yesterday things went on just as usual. Was I the same when I got up this morning? But if I'm not the same, the next question is, 'Who in the world am I?' Ah, that's the great puzzle!\As she said this, she looked down at her hands and was surprised to see that she had put on one of the Rabbit's little white kid-gloves while she was talking. \How can I have done that?\ she thought. \I must be growing small again.\ She got up and went to the table to measure herself by it and found that she was now about two feet high and was going on shrinking rapidly. She soon found out that the cause of this was the fan she was holding and she dropped it hastily, just in time to save herself from shrinking away altogether.\That was a narrow escape!\ said Alice, a good deal frightened at the sudden change, but very glad to find herself still in existence. \And now for the garden!\ And she ran with all speed back to the little door; but, alas! the little door was shut again and the little golden key was lying on the glass table as before. \Things are worse than ever,\ thought the poor child, \for I never was so small as this before, never!\As she said these words, her foot slipped, and in another moment, splash! she was up to her chin in salt-water. Her first idea was that she had somehow fallen into the sea. However, she soon made out that she was in the pool of tears which she had wept when she was nine feet high.Just then she heard something splashing about in the pool a little way off, and she swam nearer to see what it was: she soon made out that it was only a mouse that had slipped in like herself.\Would it be of any use, now,\ thought Alice, \to speak to this mouse? Everything is so out-of-the-way down here that I should think very likely it can talk; at any rate, there's no harm in trying.\ So she began, \O Mouse, do you know the way out of this pool? I am very tired of swimming about here, O Mouse!\ The Mouse looked at her rather inquisitively and seemed to her to wink with one of its little eyes, but it said nothing.\Perhaps it doesn't understand English,\ thought Alice. \I dare say it's a French mouse, come over with William the Conqueror.\ So she began again: \Où est ma chatte?\ which was the first sentence in her French lesson-book. The Mouse gave a sudden leap out of the water and seemed to quiver all over with fright. \Oh, I beg your pardon!\ cried Alice hastily, afraid that she had hurt the poor animal's feelings. \I quite forgot you didn't like cats.\\Not like cats!\ cried the Mouse in a shrill, passionate voice. \Would you like cats, if you were me?\\Well, perhaps not,\ said Alice in a soothing tone; \don't be angry about it. And yet I wish I could show you our cat Dinah. I think you'd take a fancy to cats, if you could only see her. She is such a dear, quiet thing.\ The Mouse was bristling all over and she felt certain it must be really offended. \We won't talk about her any more, if you'd rather not.\\We, indeed!\ cried the Mouse, who was trembling down to the end of its tail. \As if I would talk on such a subject! Our family always hated cats—nasty, low, vulgar things! Don't let me hear the name again!\Alice at the Mad Tea Party.Alice at the Mad Tea Party.\I won't indeed!\ said Alice, in a great hurry to change the subject of conversation. \Are you—are you fond—of—of dogs? There is such a nice little dog near our house, I should like to show you! It kills all the rats and—oh, dear!\ cried Alice in a sorrowful tone. \I'm afraid I've offended it again!\ For the Mouse was swimming away from her as hard as it could go, and making quite a commotion in the pool as it went.So she called softly after it, \Mouse dear! Do come back again, and we won't talk about cats, or dogs either, if you don't like them!\ When the Mouse heard this, it turned 'round and swam slowly back to her; its face was quite pale, and it said, in a low, trembling voice, \Let us get to the shore and then I'll tell you my history and you'll understand why it is I hate cats and dogs.\It was high time to go, for the pool was getting quite crowded with the birds and animals that had fallen into it; there were a Duck and a Dodo, a Lory and an Eaglet, and several other curious creatures. Alice led the way and the whole party swam to the shore.III—A CAUCUS-RACE AND A LONG TALEThey were indeed a queer-looking party that assembled on the bank—the birds with draggled feathers, the animals with their fur clinging close to them, and all dripping wet, cross and uncomfortable.The first question, of course, was how to get dry again. They had a consultation about this and after a few minutes, it seemed quite natural to Alice to find herself talking familiarly with them, as if she had known them all her life.At last the Mouse, who seemed to be a person of some authority among them, called out, \Sit down, all of you, and listen to me! I'll soon make you dry enough!\ They all sat down at once, in a large ring, with the Mouse in the middle.\Ahem!\ said the Mouse with an important air. \Are you all ready? This is the driest thing I know. Silence all 'round, if you please! 'William the Conqueror, whose cause was favored by the pope, was soon submitted to by the English, who wanted leaders, and had been of late much accustomed to usurpation and conquest. Edwin and Morcar, the Earls of Mercia and Northumbria'—\\Ugh!\ said the Lory, with a shiver.\—'And even Stigand, the patriotic archbishop of Canterbury, found it advisable'—\\Found what?\ said the Duck.\Found it,\ the Mouse replied rather crossly; \of course, you know what 'it' means.\\I know what 'it' means well enough, when I find a thing,\ said the Duck; \it's generally a frog or a worm. The question is, what did the archbishop find?\The Mouse did not notice this question, but hurriedly went on, \'—found it advisable to go with Edgar Atheling to meet William and offer him the crown.'—How are you getting on now, my dear?\ it continued, turning to Alice as it spoke.\As wet as ever,\ said Alice in a melancholy tone; \it doesn't seem to dry me at all.\\In that case,\ said the Dodo solemnly, rising to its feet, \I move that the meeting adjourn, for the immediate adoption of more energetic remedies—\\Speak English!\ said the Eaglet. \I don't know the meaning of half those long words, and, what's more, I don't believe you do either!\\What I was going to say,\ said the Dodo in an offended tone, \is that the best thing to get us dry would be a Caucus-race.\\What is a Caucus-race?\ said Alice.\Why,\ said the Dodo, \the best way to explain it is to do it.\ First it marked out a race-course, in a sort of circle, and then all the party were placed along the course, here and there. There was no \One, two, three and away!\ but they began running when they liked and left off when they liked, so that it was not easy to know when the race was over. However, when they had been running half an hour or so and were quite dry again, the Dodo suddenly called out, \The race is over!\ and they all crowded 'round it, panting and asking, \But who has won?\This question the Dodo could not answer without a great deal of thought. At last it said, \Everybody has won, and all must have prizes.\\But who is to give the prizes?\ quite a chorus of voices asked.\Why, she, of course,\ said the Dodo, pointing to Alice with one finger; and the whole party at once crowded 'round her, calling out, in a confused way, \Prizes! Prizes!\Alice had no idea what to do, and in despair she put her hand into her pocket and pulled out a box of comfits (luckily the salt-water had not got into it) and handed them 'round as prizes. There was exactly one a-piece, all 'round.The next thing was to eat the comfits; this caused some noise and confusion, as the large birds complained that they could not taste theirs, and the small ones choked and had to be patted on the back. However, it was over at last and they sat down again in a ring and begged the Mouse to tell them something more.\You promised to tell me your history, you know,\ said Alice, \and why it is you hate—C and D,\ she added in a whisper, half afraid that it would be offended again.\Mine is a long and a sad tale!\ said the Mouse, turning to Alice and sighing.\It is a long tail, certainly,\ said Alice, looking down with wonder at the Mouse's tail, \but why do you call it sad?\ And she kept on puzzling about it while the Mouse was speaking, so that her idea of the tale was something like this:—\Fury said toa mouse, Thathe met in thehouse, 'Letus both goto law: Iwill prosecuteyou.—Come, I'lltake no denial:We must havethe trial;For reallythis morningI'venothingto do.'Said themouse tothe cur,'Such atrial, dearsir, Withno juryor judge,wouldbe wastingourbreath.''I'll bejudge,I'll bejury,'saidcunningoldFury;'I'lltrythewholecause,andcondemnyou todeath.'\\You are not attending!\ said the Mouse to Alice, severely. \What are you thinking of?\\I beg your pardon,\ said Alice very humbly, \you had got to the fifth bend, I think?\\You insult me by talking such nonsense!\ said the Mouse, getting up and walking away.\Please come back and finish your story!\ Alice called after it. And the others all joined in chorus, \Yes, please do!\ But the Mouse only shook its head impatiently and walked a little quicker.\I wish I had Dinah, our cat, here!\ said Alice. This caused a remarkable sensation among the party. Some of the birds hurried off at once, and a Canary called out in a trembling voice, to its children, \Come away, my dears! It's high time you were all in bed!\ On various pretexts they all moved off and Alice was soon left alone.\I wish I hadn't mentioned Dinah! Nobody seems to like her down here and I'm sure she's the best cat in the world!\ Poor Alice began to cry again, for she felt very lonely and low-spirited. In a little while, however, she again heard a little pattering of footsteps in the distance and she looked up eagerly.IV—THE RABBIT SENDS IN A LITTLE BILLIt was the White Rabbit, trotting slowly back again and looking anxiously about as it went, as if it had lost something; Alice heard it muttering to itself, \The Duchess! The Duchess! Oh, my dear paws! Oh, my fur and whiskers! She'll get me executed, as sure as ferrets are ferrets! Where can I have dropped them, I wonder?\ Alice guessed in a moment that it was looking for the fan and the pair of white kid-gloves and she very good-naturedly began hunting about for them, but they were nowhere to be seen—everything seemed to have changed since her swim in the pool, and the great hall, with the glass table and the little door, had vanished completely.Very soon the Rabbit noticed Alice, and called to her, in an angry tone, \Why, Mary Ann, what are you doing out here? Run home this moment and fetch me a pair of gloves and a fan! Quick, now!\\He took me for his housemaid!\ said Alice, as she ran off. \How surprised he'll be when he finds out who I am!\ As she said this, she came upon a neat little house, on the door of which was a bright brass plate with the name \W. RABBIT\ engraved upon it. She went in without knocking and hurried upstairs, in great fear lest she should meet the real Mary Ann and be turned out of the house before she had found the fan and gloves.By this time, Alice had found her way into a tidy little room with a table in the window, and on it a fan and two or three pairs of tiny white kid-gloves; she took up the fan and a pair of the gloves and was just going to leave the room, when her eyes fell upon a little bottle that stood near the looking-glass. She uncorked it and put it to her lips, saying to herself, \I do hope it'll make me grow large again, for, really, I'm quite tired of being such a tiny little thing!\Before she had drunk half the bottle, she found her head pressing against the ceiling, and had to stoop to save her neck from being broken. She hastily put down the bottle, remarking, \That's quite enough—I hope I sha'n't grow any more.\Alas! It was too late to wish that! She went on growing and growing and very soon she had to kneel down on the floor. Still she went on growing, and, as a last resource, she put one arm out of the window and one foot up the chimney, and said to herself, \Now I can do no more, whatever happens. What will become of me?\Luckily for Alice, the little magic bottle had now had its full effect and she grew no larger. After a few minutes she heard a voice outside and stopped to listen.\Mary Ann! Mary Ann!\ said the voice. \Fetch me my gloves this moment!\ Then came a little pattering of feet on the stairs. Alice knew it was the Rabbit coming to look for her and she trembled till she shook the house, quite forgetting that she was now about a thousand times as large as the Rabbit and had no reason to be afraid of it.Presently the Rabbit came up to the door and tried to open it; but as the door opened inwards and Alice's elbow was pressed hard against it, that attempt proved a failure. Alice heard it say to itself, \Then I'll go 'round and get in at the window.\\That you won't!\ thought Alice; and after waiting till she fancied she heard the Rabbit just under the window, she suddenly spread out her hand and made a snatch in the air. She did not get hold of anything, but she heard a little shriek and a fall and a crash of broken glass, from which she concluded that it was just possible it had fallen into a cucumber-frame or something of that sort.Next came an angry voice—the Rabbit's—\Pat! Pat! Where are you?\ And then a voice she had never heard before, \Sure then, I'm here! Digging for apples, yer honor!\\Here! Come and help me out of this! Now tell me, Pat, what's that in the window?\\Sure, it's an arm, yer honor!\\Well, it's got no business there, at any rate; go and take it away!\There was a long silence after this and Alice could only hear whispers now and then, and at last she spread out her hand again and made another snatch in the air. This time there were two little shrieks and more sounds of broken glass. \I wonder what they'll do next!\ thought Alice. \As for pulling me out of the window, I only wish they could!\She waited for some time without hearing anything more. At last came a rumbling of little cart-wheels and the sound of a good many voices all talking together. She made out the words: \Where's the other ladder? Bill's got the other—Bill! Here, Bill! Will the roof bear?—Who's to go down the chimney?—Nay, I sha'n't! You do it! Here, Bill! The master says you've got to go down the chimney!\Alice drew her foot as far down the chimney as she could and waited till she heard a little animal scratching and scrambling about in the chimney close above her; then she gave one sharp kick and waited to see what would happen next.The first thing she heard was a general chorus of \There goes Bill!\ then the Rabbit's voice alone—\Catch him, you by the hedge!\ Then silence and then another confusion of voices—\Hold up his head—Brandy now—Don't choke him—What happened to you?\Last came a little feeble, squeaking voice, \Well, I hardly know—No more, thank ye. I'm better now—all I know is, something comes at me like a Jack-in-the-box and up I goes like a sky-rocket!\After a minute or two of silence, they began moving about again, and Alice heard the Rabbit say, \A barrowful will do, to begin with.\\A barrowful of what?\ thought Alice. But she had not long to doubt, for the next moment a shower of little pebbles came rattling in at the window and some of them hit her in the face. Alice noticed, with some surprise, that the pebbles were all turning into little cakes as they lay on the floor and a bright idea came into her head. \If I eat one of these cakes,\ she thought, \it's sure to make some change in my size.\So she swallowed one of the cakes and was delighted to find that she began shrinking directly. As soon as she was small enough to get through the door, she ran out of the house and found quite a crowd of little animals and birds waiting outside. They all made a rush at Alice the moment she appeared, but she ran off as hard as she could and soon found herself safe in a thick wood.The Duchess tucked her arm affectionately into Alice's.\The Duchess tucked her arm affectionately into Alice's.\\The first thing I've got to do,\ said Alice to herself, as she wandered about in the wood, \is to grow to my right size again; and the second thing is to find my way into that lovely garden. I suppose I ought to eat or drink something or other, but the great question is 'What?'\Alice looked all around her at the flowers and the blades of grass, but she could not see anything that looked like the right thing to eat or drink under the circumstances. There was a large mushroom growing near her, about the same height as herself. She stretched herself up on tiptoe and peeped over the edge and her eyes immediately met those of a large blue caterpillar, that was sitting on the top, with its arms folded, quietly smoking a long hookah and taking not the smallest notice of her or of anything else.V—ADVICE FROM A CATERPILLARAt last the Caterpillar took the hookah out of its mouth and addressed Alice in a languid, sleepy voice.\Who are you?\ said the Caterpillar.Alice replied, rather shyly, \I—I hardly know, sir, just at present—at least I know who I was when I got up this morning, but I think I must have changed several times since then.\\What do you mean by that?\ said the Caterpillar, sternly. \Explain yourself!\\I can't explain myself, I'm afraid, sir,\ said Alice, \because I'm not myself, you see—being so many different sizes in a day is very confusing.\ She drew herself up and said very gravely, \I think you ought to tell me who you are, first.\\Why?\ said the Caterpillar.As Alice could not think of any good reason and the Caterpillar seemed to be in a very unpleasant state of mind, she turned away.\Come back!\ the Caterpillar called after her. \I've something important to say!\ Alice turned and came back again.\Keep your temper,\ said the Caterpillar.\Is that all?\ said Alice, swallowing down her anger as well as she could.\No,\ said the Caterpillar.It unfolded its arms, took the hookah out of its mouth again, and said, \So you think you're changed, do you?\\I'm afraid, I am, sir,\ said Alice. \I can't remember things as I used—and I don't keep the same size for ten minutes together!\\What size do you want to be?\ asked the Caterpillar.\Oh, I'm not particular as to size,\ Alice hastily replied, \only one doesn't like changing so often, you know. I should like to be a little larger, sir, if you wouldn't mind,\ said Alice. \Three inches is such a wretched height to be.\\It is a very good height indeed!\ said the Caterpillar angrily, rearing itself upright as it spoke (it was exactly three inches high).In a minute or two, the Caterpillar got down off the mushroom and crawled away into the grass, merely remarking, as it went, \One side will make you grow taller, and the other side will make you grow shorter.\\One side of what? The other side of what?\ thought Alice to herself.\Of the mushroom,\ said the Caterpillar, just as if she had asked it aloud; and in another moment, it was out of sight.Alice remained looking thoughtfully at the mushroom for a minute, trying to make out which were the two sides of it. At last she stretched her arms 'round it as far as they would go, and broke off a bit of the edge with each hand.\And now which is which?\ she said to herself, and nibbled a little of the right-hand bit to try the effect. The next moment she felt a violent blow underneath her chin—it had struck her foot!She was a good deal frightened by this very sudden change, as she was shrinking rapidly; so she set to work at once to eat some of the other bit. Her chin was pressed so closely against her foot that there was hardly room to open her mouth; but she did it at last and managed to swallow a morsel of the left-hand bit....\Come, my head's free at last!\ said Alice; but all she could see, when she looked down, was an immense length of neck, which seemed to rise like a stalk out of a sea of green leaves that lay far below her.\Where have my shoulders got to? And oh, my poor hands, how is it I can't see you?\ She was delighted to find that her neck would bend about easily in any direction, like a serpent. She had just succeeded in curving it down into a graceful zigzag and was going to dive in among the leaves, when a sharp hiss made her draw back in a hurry—a large pigeon had flown into her face and was beating her violently with its wings.\Serpent!\ cried the Pigeon.\I'm not a serpent!\ said Alice indignantly. \Let me alone!\\I've tried the roots of trees, and I've tried banks, and I've tried hedges,\ the Pigeon went on, \but those serpents! There's no pleasing them!\Alice was more and more puzzled.\As if it wasn't trouble enough hatching the eggs,\ said the Pigeon, \but I must be on the look-out for serpents, night and day! And just as I'd taken the highest tree in the wood,\ continued the Pigeon, raising its voice to a shriek, \and just as I was thinking I should be free of them at last, they must needs come wriggling down from the sky! Ugh, Serpent!\\But I'm not a serpent, I tell you!\ said Alice. \I'm a—I'm a—I'm a little girl,\ she added rather doubtfully, as she remembered the number of changes she had gone through that day.\You're looking for eggs, I know that well enough,\ said the Pigeon; \and what does it matter to me whether you're a little girl or a serpent?\\It matters a good deal to me,\ said Alice hastily; \but I'm not looking for eggs, as it happens, and if I was, I shouldn't want yours—I don't like them raw.\\Well, be off, then!\ said the Pigeon in a sulky tone, as it settled down again into its nest. Alice crouched down among the trees as well as she could, for her neck kept getting entangled among the branches, and every now and then she had to stop and untwist it. After awhile she remembered that she still held the pieces of mushroom in her hands, and she set to work very carefully, nibbling first at one and then at the other, and growing sometimes taller and sometimes shorter, until she had succeeded in bringing herself down to her usual height.It was so long since she had been anything near the right size that it felt quite strange at first. \The next thing is to get into that beautiful garden—how is that to be done, I wonder?\ As she said this, she came suddenly upon an open place, with a little house in it about four feet high. \Whoever lives there,\ thought Alice, \it'll never do to come upon them this size; why, I should frighten them out of their wits!\ She did not venture to go near the house till she had brought herself down to nine inches high.VI—PIG AND PEPPERFor a minute or two she stood looking at the house, when suddenly a footman in livery came running out of the wood (judging by his face only, she would have called him a fish)—and rapped loudly at the door with his knuckles. It was opened by another footman in livery, with a round face and large eyes like a frog.The Fish-Footman began by producing from under his arm a great letter, and this he handed over to the other, saying, in a solemn tone, \For the Duchess. An invitation from the Queen to play croquet.\ The Frog-Footman repeated, in the same solemn tone, \From the Queen. An invitation for the Duchess to play croquet.\ Then they both bowed low and their curls got entangled together.When Alice next peeped out, the Fish-Footman was gone, and the other was sitting on the ground near the door, staring stupidly up into the sky. Alice went timidly up to the door and knocked.\There's no sort of use in knocking,\ said the Footman, \and that for two reasons. First, because I'm on the same side of the door as you are; secondly, because they're making such a noise inside, no one could possibly hear you.\ And certainly there was a most extraordinary noise going on within—a constant howling and sneezing, and every now and then a great crash, as if a dish or kettle had been broken to pieces.\How am I to get in?\ asked Alice.\Are you to get in at all?\ said the Footman. \That's the first question, you know.\Alice opened the door and went in. The door led right into a large kitchen, which was full of smoke from one end to the other; the Duchess was sitting on a three-legged stool in the middle, nursing a baby; the cook was leaning over the fire, stirring a large caldron which seemed to be full of soup.\There's certainly too much pepper in that soup!\ Alice said to herself, as well as she could for sneezing. Even the Duchess sneezed occasionally; and as for the baby, it was sneezing and howling alternately without a moment's pause. The only two creatures in the kitchen that did not sneeze were the cook and a large cat, which was grinning from ear to ear.\Please would you tell me,\ said Alice, a little timidly, \why your cat grins like that?\\It's a Cheshire-Cat,\ said the Duchess, \and that's why.\\I didn't know that Cheshire-Cats always grinned; in fact, I didn't know that cats could grin,\ said Alice.\You don't know much,\ said the Duchess, \and that's a fact.\Just then the cook took the caldron of soup off the fire, and at once set to work throwing everything within her reach at the Duchess and the baby—the fire-irons came first; then followed a shower of saucepans, plates and dishes. The Duchess took no notice of them, even when they hit her, and the baby was howling so much already that it was quite impossible to say whether the blows hurt it or not.\Oh, please mind what you're doing!\ cried Alice, jumping up and down in an agony of terror.\Here! You may nurse it a bit, if you like!\ the Duchess said to Alice, flinging the baby at her as she spoke. \I must go and get ready to play croquet with the Queen,\ and she hurried out of the room.Alice caught the baby with some difficulty, as it was a queer-shaped little creature and held out its arms and legs in all directions. \If I don't take this child away with me,\ thought Alice, \they're sure to kill it in a day or two. Wouldn't it be murder to leave it behind?\ She said the last words out loud and the little thing grunted in reply.\If you're going to turn into a pig, my dear,\ said Alice, \I'll have nothing more to do with you. Mind now!\Alice was just beginning to think to herself, \Now, what am I to do with this creature, when I get it home?\ when it grunted again so violently that Alice looked down into its face in some alarm. This time there could be no mistake about it—it was neither more nor less than a pig; so she set the little creature down and felt quite relieved to see it trot away quietly into the wood.Alice was a little startled by seeing the Cheshire-Cat sitting on a bough of a tree a few yards off. The Cat only grinned when it saw her. \Cheshire-Puss,\ began Alice, rather timidly, \would you please tell me which way I ought to go from here?\\In that direction,\ the Cat said, waving the right paw 'round, \lives a Hatter; and in that direction,\ waving the other paw, \lives a March Hare. Visit either you like; they're both mad.\\But I don't want to go among mad people,\ Alice remarked.\Oh, you can't help that,\ said the Cat; \we're all mad here. Do you play croquet with the Queen to-day?\\I should like it very much,\ said Alice, \but I haven't been invited yet.\\You'll see me there,\ said the Cat, and vanished.Alice had not gone much farther before she came in sight of the house of the March Hare; it was so large a house that she did not like to go near till she had nibbled some more of the left-hand bit of mushroom.VII—A MAD TEA-PARTYThere was a table set out under a tree in front of the house, and the March Hare and the Hatter were having tea at it; a Dormouse was sitting between them, fast asleep.The table was a large one, but the three were all crowded together at one corner of it. \No room! No room!\ they cried out when they saw Alice coming. \There's plenty of room!\ said Alice indignantly, and she sat down in a large arm-chair at one end of the table.The Hatter opened his eyes very wide on hearing this, but all he said was \Why is a raven like a writing-desk?\\I'm glad they've begun asking riddles—I believe I can guess that,\ she added aloud.\Do you mean that you think you can find out the answer to it?\ said the March Hare.\Exactly so,\ said Alice.\Then you should say what you mean,\ the March Hare went on.\I do,\ Alice hastily replied; \at least—at least I mean what I say—that's the same thing, you know.\\You might just as well say,\ added the Dormouse, which seemed to be talking in its sleep, \that 'I breathe when I sleep' is the same thing as 'I sleep when I breathe!'\\It is the same thing with you,\ said the Hatter, and he poured a little hot tea upon its nose. The Dormouse shook its head impatiently and said, without opening its eyes, \Of course, of course; just what I was going to remark myself.\\Have you guessed the riddle yet?\ the Hatter said, turning to Alice again.\No, I give it up,\ Alice replied. \What's the answer?\\I haven't the slightest idea,\ said the Hatter.\Nor I,\ said the March Hare.Alice gave a weary sigh. \I think you might do something better with the time,\ she said, \than wasting it in asking riddles that have no answers.\\Take some more tea,\ the March Hare said to Alice, very earnestly.\I've had nothing yet,\ Alice replied in an offended tone, \so I can't take more.\\You mean you can't take less,\ said the Hatter; \it's very easy to take more than nothing.\At this, Alice got up and walked off. The Dormouse fell asleep instantly and neither of the others took the least notice of her going, though she looked back once or twice; the last time she saw them, they were trying to put the Dormouse into the tea-pot.The Trial of the Knave of Hearts.The Trial of the Knave of Hearts.\At any rate, I'll never go there again!\ said Alice, as she picked her way through the wood. \It's the stupidest tea-party I ever was at in all my life!\ Just as she said this, she noticed that one of the trees had a door leading right into it. \That's very curious!\ she thought. \I think I may as well go in at once.\ And in she went.Once more she found herself in the long hall and close to the little glass table. Taking the little golden key, she unlocked the door that led into the garden. Then she set to work nibbling at the mushroom (she had kept a piece of it in her pocket) till she was about a foot high; then she walked down the little passage; and then—she found herself at last in the beautiful garden, among the bright flower-beds and the cool fountains.VIII—THE QUEEN'S CROQUET GROUNDA large rose-tree stood near the entrance of the garden; the roses growing on it were white, but there were three gardeners at it, busily painting them red. Suddenly their eyes chanced to fall upon Alice, as she stood watching them. \Would you tell me, please,\ said Alice, a little timidly, \why you are painting those roses?\Five and Seven said nothing, but looked at Two. Two began, in a low voice, \Why, the fact is, you see, Miss, this here ought to have been a red rose-tree, and we put a white one in by mistake; and, if the Queen was to find it out, we should all have our heads cut off, you know. So you see, Miss, we're doing our best, afore she comes, to—\ At this moment, Five, who had been anxiously looking across the garden, called out, \The Queen! The Queen!\ and the three gardeners instantly threw themselves flat upon their faces. There was a sound of many footsteps and Alice looked 'round, eager to see the Queen.First came ten soldiers carrying clubs, with their hands and feet at the corners: next the ten courtiers; these were ornamented all over with diamonds. After these came the royal children; there were ten of them, all ornamented with hearts. Next came the guests, mostly Kings and Queens, and among them Alice recognized the White Rabbit. Then followed the Knave of Hearts, carrying the King's crown on a crimson velvet cushion; and last of all this grand procession came THE KING AND THE QUEEN OF HEARTS.When the procession came opposite to Alice, they all stopped and looked at her, and the Queen said severely, \Who is this?\ She said it to the Knave of Hearts, who only bowed and smiled in reply.\My name is Alice, so please Your Majesty,\ said Alice very politely; but she added to herself, \Why, they're only a pack of cards, after all!\\Can you play croquet?\ shouted the Queen. The question was evidently meant for Alice.\Yes!\ said Alice loudly.\Come on, then!\ roared the Queen.\It's—it's a very fine day!\ said a timid voice to Alice. She was walking by the White Rabbit, who was peeping anxiously into her face.\Very,\ said Alice. \Where's the Duchess?\\Hush! Hush!\ said the Rabbit. \She's under sentence of execution.\\What for?\ said Alice.\She boxed the Queen's ears—\ the Rabbit began.\Get to your places!\ shouted the Queen in a voice of thunder, and people began running about in all directions, tumbling up against each other. However, they got settled down in a minute or two, and the game began.Alice thought she had never seen such a curious croquet-ground in her life; it was all ridges and furrows. The croquet balls were live hedgehogs, and the mallets live flamingos and the soldiers had to double themselves up and stand on their hands and feet, to make the arches.The players all played at once, without waiting for turns, quarrelling all the while and fighting for the hedgehogs; and in a very short time, the Queen was in a furious passion and went stamping about and shouting, \Off with his head!\ or \Off with her head!\ about once in a minute.\They're dreadfully fond of beheading people here,\ thought Alice; \the great wonder is that there's anyone left alive!\She was looking about for some way of escape, when she noticed a curious appearance in the air. \It's the Cheshire-Cat,\ she said to herself; \now I shall have somebody to talk to.\\How are you getting on?\ said the Cat.\I don't think they play at all fairly,\ Alice said, in a rather complaining tone; \and they all quarrel so dreadfully one can't hear oneself speak—and they don't seem to have any rules in particular.\\How do you like the Queen?\ said the Cat in a low voice.\Not at all,\ said Alice.Alice thought she might as well go back and see how the game was going on. So she went off in search of her hedgehog. The hedgehog was engaged in a fight with another hedgehog, which seemed to Alice an excellent opportunity for croqueting one of them with the other; the only difficulty was that her flamingo was gone across to the other side of the garden, where Alice could see it trying, in a helpless sort of way, to fly up into a tree. She caught the flamingo and tucked it away under her arm, that it might not escape again.Just then Alice ran across the Duchess (who was now out of prison). She tucked her arm affectionately into Alice's and they walked off together. Alice was very glad to find her in such a pleasant temper. She was a little startled, however, when she heard the voice of the Duchess close to her ear. \You're thinking about something, my dear, and that makes you forget to talk.\\The game's going on rather better now,\ Alice said, by way of keeping up the conversation a little.\'Tis so,\ said the Duchess; \and the moral of that is—'Oh, 'tis love, 'tis love that makes the world go 'round!'\\Somebody said,\ Alice whispered, \that it's done by everybody minding his own business!\\Ah, well! It means much the same thing,\ said the Duchess, digging her sharp little chin into Alice's shoulder, as she added \and the moral of that is—'Take care of the sense and the sounds will take care of themselves.'\To Alice's great surprise, the Duchess's arm that was linked into hers began to tremble. Alice looked up and there stood the Queen in front of them, with her arms folded, frowning like a thunderstorm!\Now, I give you fair warning,\ shouted the Queen, stamping on the ground as she spoke, \either you or your head must be off, and that in about half no time. Take your choice!\ The Duchess took her choice, and was gone in a moment.\Let's go on with the game,\ the Queen said to Alice; and Alice was too much frightened to say a word, but slowly followed her back to the croquet-ground.All the time they were playing, the Queen never left off quarreling with the other players and shouting, \Off with his head!\ or \Off with her head!\ By the end of half an hour or so, all the players, except the King, the Queen and Alice, were in custody of the soldiers and under sentence of execution.Then the Queen left off, quite out of breath, and walked away with Alice.Alice heard the King say in a low voice to the company generally, \You are all pardoned.\Suddenly the cry \The Trial's beginning!\ was heard in the distance, and Alice ran along with the others.IX—WHO STOLE THE TARTS?The King and Queen of Hearts were seated on their throne when they arrived, with a great crowd assembled about them—all sorts of little birds and beasts, as well as the whole pack of cards: the Knave was standing before them, in chains, with a soldier on each side to guard him; and near the King was the White Rabbit, with a trumpet in one hand and a scroll of parchment in the other. In the very middle of the court was a table, with a large dish of tarts upon it. \I wish they'd get the trial done,\ Alice thought, \and hand 'round the refreshments!\The judge, by the way, was the King and he wore his crown over his great wig. \That's the jury-box,\ thought Alice; \and those twelve creatures (some were animals and some were birds) I suppose they are the jurors.\Just then the White Rabbit cried out \Silence in the court!\\Herald, read the accusation!\ said the King.On this, the White Rabbit blew three blasts on the trumpet, then unrolled the parchment-scroll and read as follows:\The Queen of Hearts, she made some tarts,All on a summer day;The Knave of Hearts, he stole those tartsAnd took them quite away!\\Call the first witness,\ said the King; and the White Rabbit blew three blasts on the trumpet and called out, \First witness!\The first witness was the Hatter. He came in with a teacup in one hand and a piece of bread and butter in the other.\You ought to have finished,\ said the King. \When did you begin?\The Hatter looked at the March Hare, who had followed him into the court, arm in arm with the Dormouse. \Fourteenth of March, I think it was,\ he said.\Give your evidence,\ said the King, \and don't be nervous, or I'll have you executed on the spot.\This did not seem to encourage the witness at all; he kept shifting from one foot to the other, looking uneasily at the Queen, and, in his confusion, he bit a large piece out of his teacup instead of the bread and butter.Just at this moment Alice felt a very curious sensation—she was beginning to grow larger again.The miserable Hatter dropped his teacup and bread and butter and went down on one knee. \I'm a poor man, Your Majesty,\ he began.\You're a very poor speaker,\ said the King.\You may go,\ said the King, and the Hatter hurriedly left the court.\Call the next witness!\ said the King.The next witness was the Duchess's cook. She carried the pepper-box in her hand and the people near the door began sneezing all at once.\Give your evidence,\ said the King.\Sha'n't,\ said the cook.The King looked anxiously at the White Rabbit, who said, in a low voice, \Your Majesty must cross-examine this witness.\\Well, if I must, I must,\ the King said. \What are tarts made of?\\Pepper, mostly,\ said the cook.For some minutes the whole court was in confusion and by the time they had settled down again, the cook had disappeared.\Never mind!\ said the King, \call the next witness.\Alice watched the White Rabbit as he fumbled over the list. Imagine her surprise when he read out, at the top of his shrill little voice, the name \Alice!\X—ALICE'S EVIDENCE\Here!\ cried Alice. She jumped up in such a hurry that she tipped over the jury-box, upsetting all the jurymen on to the heads of the crowd below.\Oh, I beg your pardon!\ she exclaimed in a tone of great dismay.\The trial cannot proceed,\ said the King, \until all the jurymen are back in their proper places—all,\ he repeated with great emphasis, looking hard at Alice.\What do you know about this business?\ the King said to Alice.\Nothing whatever,\ said Alice.The King then read from his book: \Rule forty-two. All persons more than a mile high to leave the court.\\I'm not a mile high,\ said Alice.\Nearly two miles high,\ said the Queen.\Well, I sha'n't go, at any rate,\ said Alice.The King turned pale and shut his note-book hastily. \Consider your verdict,\ he said to the jury, in a low, trembling voice.\There's more evidence to come yet, please Your Majesty,\ said the White Rabbit, jumping up in a great hurry. \This paper has just been picked up. It seems to be a letter written by the prisoner to—to somebody.\ He unfolded the paper as he spoke and added, \It isn't a letter, after all; it's a set of verses.\\Please, Your Majesty,\ said the Knave, \I didn't write it and they can't prove that I did; there's no name signed at the end.\\You must have meant some mischief, or else you'd have signed your name like an honest man,\ said the King. There was a general clapping of hands at this.\Read them,\ he added, turning to the White Rabbit.There was dead silence in the court whilst the White Rabbit read out the verses.\That's the most important piece of evidence we've heard yet,\ said the King.\I don't believe there's an atom of meaning in it,\ ventured Alice.\If there's no meaning in it,\ said the King, \that saves a world of trouble, you know, as we needn't try to find any. Let the jury consider their verdict.\\No, no!\ said the Queen. \Sentence first—verdict afterwards.\\Stuff and nonsense!\ said Alice loudly. \The idea of having the sentence first!\\Hold your tongue!\ said the Queen, turning purple.\I won't!\ said Alice.\Off with her head!\ the Queen shouted at the top of her voice. Nobody moved.\Who cares for you?\ said Alice (she had grown to her full size by this time). \You're nothing but a pack of cards!\At this, the whole pack rose up in the air and came flying down upon her; she gave a little scream, half of fright and half of anger, and tried to beat them off, and found herself lying on the bank, with her head in the lap of her sister, who was gently brushing away some dead leaves that had fluttered down from the trees upon her face.\Wake up, Alice dear!\ said her sister. \Why, what a long sleep you've had!\\Oh, I've had such a curious dream!\ said Alice. And she told her sister, as well as she could remember them, all these strange adventures of hers that you have just been reading about. Alice got up and ran off, thinking while she ran, as well she might, what a wonderful dream it had been.Calvin and Hobbes is a comic strip written and illustrated by Bill Watterson, following the humorous antics of Calvin, an imaginative six-year old boy, and Hobbes, his energetic and sardonic—albeit stuffed—tiger The pair are named after John Calvin, a 16th century French Reformation theologian, and Thomas Hobbes, a 17th century English political philosopherThe strip is vaguely set in the contemporary Midwestern United States, on the outskirts of suburbia, a location probably inspired by Watterson's home town of Chagrin Falls, Ohio Calvin and Hobbes appear in most of the strips, while a small number focus on other supporting characters The broad themes of the strip deal with Calvin's flights of fantasy, his friendship with Hobbes, his misadventures, his unique views on a diverse range of political and cultural issues and his relationships and interactions with his parents, classmates, educators, and other members of society The dual nature of Hobbes is also a recurring motif; Calvin sees Hobbes as a live tiger, while other characters see him as a stuffed animalEven though the series does not mention specific political figures or current events like political strips such as Garry Trudeau's Doonesbury, it does examine broad issues like environmentalism, public education, and the flaws of opinion pollsBecause of Watterson's strong anti-merchandising stanceHistoryCalvin and Hobbes was conceived when Watterson, having worked in an advertising job he detested,The first strip was published on November 18, 1985 and the series quickly became a hit Within a year of syndication, the strip was published in roughly 250 newspapers By April 1, 1987, only sixteen months after the strip began, Watterson and his work were featured in an article by the Los Angeles TimesBefore long, the strip was in wide circulation outside the United StatesWatterson took two extended breaks from writing new strips: from May 1991 to February 1992, and from April through December 1994In 1995, Watterson sent a letter via his syndicate to all editors whose newspapers carried his strip It contained the following:I will be stopping Calvin and Hobbes at the end of the year This was not a recent or an easy decision, and I leave with some sadness My interests have shifted however, and I believe I've done what I can do within the constraints of daily deadlines and small panels I am eager to work at a more thoughtful pace, with fewer artistic compromises I have not yet decided on future projects, but my relationship with Universal Press Syndicate will continue That so many newspapers would carry Calvin and Hobbes is an honor I'll long be proud of, and I've greatly appreciated your support and indulgence over the last decade Drawing this comic strip has been a privilege and a pleasure, and I thank you for giving me the opportunityThe 3,160th and final strip ran on Sunday, December 31, 1995 Syndication and Watterson's artistic standardsFrom the outset, Watterson found himself at odds with the syndicate, which urged him to begin merchandising the characters and touring the country to promote the first collections of comic strips Watterson refused To him, the integrity of the strip and its artist would be undermined by commercialization, which he saw as a major negative influence in the world of cartoon artWatterson also grew increasingly frustrated by the gradual shrinking of available space for comics in the newspapers He lamented that without space for anything more than simple dialogue or spare artwork, comics as an art form were becoming dilute, bland, and unoriginalDuring Watterson's first sabbatical from the strip, Universal Press Syndicate continued to charge newspapers full price to re-run old Calvin and Hobbes strips Few editors approved of the move, but the strip was so popular that they had little choice but to continue to run it for fear that competing newspapers might pick it up and draw its fans awayThis half-page layout can easily be rearranged for full, third, and quarter pagesThis half-page layout can easily be rearranged for full, third, and quarter pagesThen, upon Watterson's return, Universal Press announced that Watterson had decided to sell his Sunday strip as an unbreakable half of a newspaper or tabloid page Many editors and even a few cartoonists, such as Bil Keane The Family Circus, criticized him for what they perceived as arrogance and an unwillingness to abide by the normal practices of the cartoon business—a charge that Watterson ignored Watterson had negotiated the deal to allow himself more creative freedom in the Sunday comics Prior to the switch, he had to have a certain number of panels with little freedom as to layout, because in different newspapers the strip would appear at a different width; afterwards, he was free to go with whatever graphic layout he wanted, however unorthodox His frustration with the standard space division requirements is evident in strips before the change; for example, a 1988 Sunday strip published before the deal is one large panel, but with all the action and dialogue in the bottom part of the panel so editors could crop the top part if they wanted to fit the strip into a smaller space Watterson's explanation for the switch:I took a sabbatical after resolving a long and emotionally draining fight to prevent Calvin and Hobbes from being merchandised Looking for a way to rekindle my enthusiasm for the duration of a new contract term, I proposed a redesigned Sunday format that would permit more panel flexibility To my surprise and delight, Universal responded with an offer to market the strip as an unbreakable half page more space than I'd dared to ask for, despite the expected resistance of editors To this day, my syndicate assures me that some editors liked the new format, appreciated the difference, and were happy to run the larger strip, but I think it's fair to say that this was not the most common reaction The syndicate had warned me to prepare for numerous cancellations of the Sunday feature, but after a few weeks of dealing with howling, purple-faced editors, the syndicate suggested that papers could reduce the strip to the size tabloid newspapers used for their smaller sheets of paper … I focused on the bright side: I had complete freedom of design and there were virtually no cancellations For all the yelling and screaming by outraged editors, I remain convinced that the larger Sunday strip gave newspapers a better product and made the comics section more fun for readers Comics are a visual medium A strip with a lot of drawing can be exciting and add some variety Proud as I am that I was able to draw a larger strip, I don't expect to see it happen again any time soon In the newspaper business, space is money, and I suspect most editors would still say that the difference is not worth the cost Sadly, the situation is a vicious circle: because there's no room for better artwork, the comics are simply drawn; because they're simply drawn, why should they have more roomCalvin and Hobbes remained extremely popular after the change and thus Watterson was able to expand his style and technique for the more spacious Sunday strips without losing carriers MerchandisingBill Watterson is notable for his insistence that cartoon strips should stand on their own as an art form, and he has resisted the use of Calvin and Hobbes in merchandising of any sort This insistence stuck despite the fact that it could have generated millions of dollars per year in additional personal income Watterson explains in a 2005 press release:Actually, I wasn't against all merchandising when I started the strip, but each product I considered seemed to violate the spirit of the strip, contradict its message, and take me away from the work I loved If my syndicate had let it go at that, the decision would have taken maybe 30 seconds of my lifeWatterson did ponder animating Calvin and Hobbes, and has expressed admiration for the art form In a 1989 interview in The Comics Journal, Watterson states:If you look at the old cartoons by Tex Avery and Chuck Jones, you'll see that there are a lot of things single drawings just can't do Animators can get away with incredible distortion and exaggerationbecause the animator can control the length of time you see something The bizarre exaggeration barely has time to register, and the viewer doesn’t ponder the incredible license he's witnessed In a comic strip, you just show the highlights of action—you can't show the buildup and releaseor at least not without slowing down the pace of everything to the point where it's like looking at individual frames of a movie, in which case you've probably lost the effect you were trying to achieve In a comic strip, you can suggest motion and time, but it's very crude compared to what an animator can do I have a real awe for good animationAfter this he was asked if it was \a little scary to think of hearing Calvin's voice\ He responded that it was \very scary,\ and that although he loved the visual possibilities of animation, the thought of casting voice actors to play his characters was uncomfortable He was also unsure whether he wanted to work with an animation team, as he had done all previous work by himself Ultimately, Calvin and Hobbes was never made into an animated series Watterson later stated in the \Calvin and Hobbes Tenth Anniversary Book\ that he liked the fact that his strip was a \low-tech, one-man operation,\ and took great pride in the fact that he drew every line and wrote every word on his ownExcept for the books, two 16-month calendars 1988–1989 and 1989–1990, the textbook Teaching with Calvin and Hobbes, Style and influencesCalvin and Hobbes strips are characterized by sparse but careful craftsmanship, intelligent humor, poignant observations, witty social and political commentary, and well-developed characters Precedents to Calvin's fantasy world can be found in Crockett Johnson's Barnaby, Charles M Schulz's Peanuts, Percy Crosby's Skippy, Berkeley Breathed's Bloom County, and George Herriman's Krazy Kat, while Watterson's use of comics as sociopolitical commentary reaches back to Walt Kelly's Pogo and Quino's Mafalda Schulz and Kelly, in particular, influenced Watterson's outlook on comics during his formative yearsIn initial strips, the drawings have a more cartoony, flat, crude, Peanuts-like look; in the recent strips, the drawings are three-dimensional Notable elements of Watterson's artistic style are his characters' diverse and often exaggerated expressions particularly those of Calvin, elaborate and bizarre backgrounds for Calvin's flights of imagination, well-captured kinetics, and frequent visual jokes and metaphors In the later years of the strip, with more space available for his use, Watterson experimented more freely with different panel layouts, art styles, stories without dialogue, and greater use of whitespace He also made a point of not showing certain things explicitly: the \Noodle Incident\ and the children's book Hamster Huey and the Gooey Kablooie were left to the reader's imagination, where Watterson was sure they would be “more outrageous” than he could portrayWatterson's technique started with minimalist pencil sketches drawn with a light pencil though the larger Sunday strips often required more elaborate work; he then would use a small sable brush and India ink on the Strathmore bristol board to complete most of the remaining drawing He also letters dialogue with a Rapidograph fountain pen, and he uses a crowquill pen for odds and ends He whites out the mistakes with Liquid Paper He was careful in his use of color, often spending a great deal of time in choosing the right colors to employ for the weekly Sunday strip When Calvin and Hobbes started, there were 64 colors available for the Sunday strips For the later Sunday strips, Watterson had 125 colors, as well as the ability to fade the colors into each other Art and academiaWatterson used the strip to criticize the artistic world, principally through Calvin's unconventional creations of snowmen but also through other expressions of childhood art When Miss Wormwood complains that he is wasting class time drawing incomprehensible things a Stegosaurus in a rocket ship, for example, Calvin proclaims himself \on the cutting edge of the avant-garde\ He begins exploring the medium of snow when a warm day melts his snowman His next sculpture \speaks to the horror of our own mortality, inviting the viewer to contemplate the evanescence of life\ In further strips, Calvin's creative instincts diversify to include sidewalk drawings or as he terms them, examples of \suburban postmodernism\Watterson also lampooned the academic world In one example, Calvin writes a \revisionist autobiography\, recruiting Hobbes to take pictures of him doing stereotypical kid activities like playing sports in order to make him seem more well-adjusted In another strip, he carefully crafts an \artist's statement,\ claiming that such essays convey more messages than artworks themselves ever do Hobbes blandly notes \You misspelled Weltanschauung\ He indulges in what Watterson calls \pop psychobabble\ to justify his destructive rampages and shift blame to his parents, citing \toxic codependency\ In one instance, he pens a book report based on the theory that the purpose of academic scholarship is to \inflate weak ideas, obscure poor reasoning, and inhibit clarity,\ entitled The Dynamics of Interbeing and Monological Imperatives in Dick and Jane: A Study in Psychic Transrelational Gender Modes Displaying his creation to Hobbes, he remarks, \Academia, here I come!\ Watterson explains that he adapted this jargon and similar examples from several other strips from an actual book of art criticismOverall, Watterson's satirical essays serve to attack both sides, criticizing both the commercial mainstream and the artists who are supposed to be \outside\ it Not long after he began drawing his \Dinosaurs In Rocket Ships\ series, Calvin tells Hobbes:The hard part for us avant-garde post-modern artists is deciding whether or not to embrace commercialism Do we allow our work to be hyped and exploited by a market that's simply hungry for the next new thing Do we participate in a system that turns high art into low art so it's better suited for mass consumption Of course, when an artist goes commercial, he makes a mockery of his status as an outsider and free thinker He buys into the crass and shallow values art should transcend He trades the integrity of his art for riches and fame Oh, what the heck I'll do it Social criticismsIn addition to his criticisms of art and academia, Watterson often used the strip to comment on American culture and society With rare exception, the strip avoids reference to actual people or events Watterson's commentary is therefore necessarily generalized He expresses frustration with public decadence and apathy, with commercialism, and with the pandering nature of the mass media Calvin is often seen \glued\ to the television, while his father speaks with the voice of ascetic virtue, struggling to impart his values to CalvinWatterson's vehicle for criticism is often Hobbes, who comments on Calvin's unwholesome habits from a more cynical perspective He is more likely to make a wry observation than actually intervene; he may merely watch as Calvin inadvertently makes the point himself In one instance, Calvin tells Hobbes about a science fiction story he has read in which machines turn humans into zombie slaves Hobbes makes a comment about the irony of machines controlling people instead of the other way around; Calvin then exclaims, \I'll say Hey! What time is it My TV show is on!\ and sprints back inside to watch itA Sunday, 21 June 1992 strip discussing the Big Bang coined the term \Horrendous Space Kablooie\ for the event, a term which has achieved some tongue-in-cheek popularity among the scientific community, particularly in informal discussion and often shortened to \the HSK\ Visual distortionsOn several occasions, Watterson drew strips with strange visual distortions: inverted colors, objects turning \neo-cubist\, or fantasy environments with other unusual physical phenomena Only Calvin is able to perceive these alterations, which seem to illustrate both his own shifting point of view and a typical six-year-old's wild imaginationIn the Tenth Anniversary Book, Watterson explains that some of these strips were metaphors for his own experiences, illustrating, for example, his conflicts with his syndicate: a 1989 Sunday strip, normally in color, was drawn almost entirely in an inverted monochrome Calvin is accused by his father of seeing issues \in black and white\—an accusation sometimes leveled at Watterson regarding his refusal to license the strip—to which Calvin, echoing Watterson's own retort, replies, \Sometimes that's the way things are!\ Passage of timeWhen the strips were originally published, Calvin's settings were seasonally appropriate for the Northern Hemisphere Calvin would be seen building snowmen or sledding during the period from November through February or so, and outside activities such as water balloon fights would replace school from June through August Christmas and Halloween strips were run during those times of yearAlthough Watterson depicts several years' worth of holidays, school years, summer vacations, and camping trips, and characters are aware of multiple \current\ years such as \'94 model toboggans,\ \Vote Dad in '88,\ the '90s as the new decade, etc Calvin is never shown to age, pass to second grade, nor have any birthday celebrations The only birthday ever shown was that of Susie Derkins Such temporal distortions are fairly common among comic strips, as with the children in Peanuts, who existed without aging for decades Likewise, the characters in Krazy Kat celebrate the New Year but never grow old, and young characters like Ignatz Mouse's offspring never seem to grow up These uses of a floating timeline are very unlike series such as Gasoline Alley, Doonesbury and until 2007 For Better or For Worse, in which the characters age each year with their reading audience, get married, and have childrenWhile Calvin does not grow older in the strip, reference is made in two strips—from November 17 and 18, 1995 ten years since the strip's debut—to Calvin having once been two and three years old and now feeling that \a lifetime of experience has left Academic responseIn her book When Toys Come Alive, Lois Rostow Kuznets discusses Calvin and Hobbes in the context of other literature featuring living toys She argues that these toys are examples of transitional objects that mediate childhood experience and the adult world, where Hobbes serves both as a figure of Calvin's childish fantasy life and as an outlet for the expression of libidinous desires more associated with adults She cites, for example, a strip where Hobbes expresses a fantasy of playing \saxophone for an all-girl cabaret in New Orleans\ as an example where Hobbes expresses a desire that is more sophisticated and adult than Calvin's frame of reference usually allows Kuznets also looks at Calvin's other fantasies, suggesting that they are a second tier of fantasies utilized in places like school where transitional objects such as Hobbes would not be socially acceptableA second line of argument comes from Philip Sandifer, who uses Calvin and Hobbes as the main example for a reading of comic strips based on the psychoanalytic theories of Jacques Lacan He draws parallel between Hobbes's status as an imaginary friend and the Lacanian concept of the Imaginary, suggesting that a given comic strip is an attempt to construct a momentary and ephemeral present that will be dismantled by the punchline which he allies with the Lacanian Real, wiping the slate and allowing the process to begin again the next day He suggests that the strip takes place in an eternal present with no real reference to its past, which is erased each day with the punchline so that a new present can be constructed He also looks at the later Sunday strips, which are known for the technical skill Watterson displayed when given a more unrestricted layout, arguing that his layouts are best read not in terms of their use of space but in terms of their depiction of timeNamed after the 16th-century theologian, Calvin is an impulsive, sometimes overly creative, imaginative, energetic, curious, intelligent, and often selfish six-year-old, whose last name is never mentioned in the strip Despite his low grades, Calvin has a wide vocabulary range that rivals that of an adult as well as an emerging philosophical mind:Calvin: \Dad, are you vicariously living through me in the hope that my accomplishments will validate your mediocre life and in some way compensate for all of the opportunities you botched\Calvin's father: \If I were, you can bet I'd be re-evaluating my strategy\Calvin later, to his mother: \Mom, Dad keeps insulting me\He commonly wears his distinctive red-and-black striped shirt, black pants, magenta socks and white sneakers He is also a compulsive reader of comic books and has a tendency to order items marketed in comic books or on boxes of his favorite cereal, \Chocolate Frosted Sugar Bombs\ Calvin chews gum regularly and subscribes to a magazine called Chewing Throughout the series, he is also revealed to be a \trial and error\ sort of person Watterson has described Calvin thus: \Calvin is pretty easy to do because he is outgoing and rambunctious and there's not much of a filter between his brain and his mouth\ \I guess he's a little too intelligent for his age The thing that I really enjoy about him is that he has no sense of restraint, he doesn't have the experience yet to know the things that you shouldn't do\ HobbesMain article: Hobbes Calvin and HobbesHobbesFrom everyone else's point of view, Hobbes is Calvin's stuffed tiger From Calvin's point of view, however, Hobbes is an anthropomorphic tiger, much larger than Calvin and full of independent attitudes and ideas But when the perspective shifts to any other character, readers again see merely a stuffed animal, usually seated at an off-kilter angle This is, of course, an odd dichotomy, and Watterson explains it thus:When Hobbes is a stuffed toy in one panel and alive in the next, I'm juxtaposing the \grown-up\ version of reality with Calvin's version, and inviting the reader to decide which is truerHobbes' true nature is made more ambiguous by episodes that seem to attribute real-life consequences to Hobbes's actions One example is his habit of pouncing on Calvin the moment he arrives home from school, an act which always leaves Calvin with bruises and scrapes that are evident to other characters In another incident, Hobbes manages to tie Calvin to a chair in such a way that Calvin's father is unable to understand how he could have done it himself Yet another incident features Hobbes leaving Calvin hanging by the seat of his pants from a tree branch above Calvin's headHobbes is named after the 17th-century philosopher Thomas Hobbes, who had what Watterson described as \a dim view of human nature\Although the first strips clearly show Calvin capturing Hobbes by means of a snare with tuna fish sandwich as the bait, a later comic August 1, 1989 seems to imply that Hobbes is, in fact, older than Calvin, and has been around his whole life Watterson eventually decided that it was not important to establish how Calvin and Hobbes had first met Supporting charactersMain article: Secondary characters in Calvin and Hobbes Calvin's familyCalvin's parents, always referred to only as \Mom\ and \Dad\, or \Dear\ to each otherCalvin's parents, always referred to only as \Mom\ and \Dad\, or \Dear\ to each otherDad's first appearance: November 18, 1985 Dad's last appearance: December 3, 1995Mom's first appearance: November 26, 1985 Mom's last appearance: December 21, 1995Calvin's mother and father are for the most part typical Middle American middle-class parents Like many other characters in the strip, their relatively down-to-earth and sensible attitudes serve primarily as a foil for Calvin's outlandish behavior At the beginning of the strip, Watterson says some fans were angered by the way Calvin's parents thought of Calvin his father has remarked that he would have preferred a dog instead They are not above the occasional cruelty: his mother provided him with a cigarette to teach him a lesson, and his father often tells him outrageous lies when asked a straight question Calvin's father is a patent attorney; his mother is a stay-at-home mom Both parents go through the entire strip unnamed, except as \Mom\ and \Dad,\ or such nicknames as \hon\ and \dear\ when referring to each other Watterson has never given Calvin's parents names \because as far as the strip is concerned, they are important only as Calvin's mom and dad\ This ended up being somewhat problematic when Calvin's Uncle Max was in the strip for a week and could not refer to the parents by name It was one of the main reasons that Max never reappearedFirst appearance: December 5, 1985 Last appearance: December 16, 1995Susie Derkins, the only important character with both a given name and a family name, is a classmate of Calvin's who lives in his neighborhood Named for the pet beagle of Watterson's wife's family, she first appeared early in the strip as a new student in Calvin's class In contrast with Calvin, she is polite and diligent in her studies, and her imagination usually seems mild-mannered and civilized, consisting of stereotypical young girl games such as playing house or having tea parties with her stuffed animals Though both of them hate to admit it, Calvin and Susie have quite a bit in common For example, Susie is shown on occasion with a stuffed rabbit dubbed \Mr Bun,\ and Calvin, of course, has Hobbes Susie also has a mischievous streak, which can be seen when she subverts Calvin's attempts to cheat on school tests by feeding him incorrect answers Watterson admits that Calvin and Susie have a bit of a nascent crush on each other, and that Susie is inspired by the type of woman that he himself finds attractive and eventually married Her relationship with Calvin, though, is frequently conflicted, and never really becomes sorted out Miss WormwoodMiss Wormwood, Calvin's teacherMiss Wormwood, Calvin's teacherFirst appearance: November 21, 1985 Last appearance: October 30, 1995 unseen speaking appearance on November 6, 1995Miss Wormwood is Calvin's world-weary teacher, named after the apprentice devil in C S Lewis's The Screwtape Letters She perpetually wears polka-dotted dresses, and serves, like others, as a foil to Calvin's mischief Throughout the strip's run, various jokes hint that Miss Wormwood is waiting to retire, takes a lot of medication, and is a heavy smoker and drinker Watterson has said that he has a great deal of sympathy for Miss Wormwood, who is clearly frustrated by trying to keep rowdy children under control so they can learn something RosalynRosalyn, Calvin's babysitter and one-time swim instructorRosalyn, Calvin's babysitter and one-time swim instructorFirst appearance: May 15, 1986 Last appearance: September 16, 1995Rosalyn is a teenage high school senior and Calvin's official babysitter whenever Calvin's parents need a night out She is also his swimming instructor in one early sequence of strips She is the only babysitter able to tolerate Calvin's antics, which she uses to demand raises and advances from Calvin's desperate parents She is also, according to Watterson, the only person Calvin truly fears She does not hesitate to play as dirty as he does Calvin and Rosalyn usually do not get along, except in one case where she plays \Calvinball\ with him in exchange for him doing his homework Rosalyn's boyfriend, Charlie, never appears in the strip but calls her occasionally while she babysits Originally she was created as a nameless, one-shot character with no plan for her to appear again; however, Watterson decided he wanted to retain her unique ability to intimidate Calvin, which ultimately led to many more appearances MoeMoe, a bully at Calvin's schoolMoe, a bully at Calvin's schoolFirst appearance: January 30, 1986 Last appearance: November 20, 1995Moe is the archetypical bully character in Calvin and Hobbes, \a six-year-old who shaves,\ who always shoves Calvin against walls, demands his lunch money, and calls him \Twinky\ Moe is the only regular character who speaks in an unusual font: his frequently monosyllabic dialogue is shown in crude, lower-case letters Watterson describes Moe as \big, dumb, ugly and cruel,\ and a summation of \every jerk I've ever known\ While Moe is not smart, he is, as Calvin puts it, streetwise: \That means he knows what street he lives on\Principal Spittle is the principal at Calvin's school It has been implied that, as with Miss Wormwood, Calvin's behavior is the main reason Spittle dislikes his job; Calvin has been to Spittle's office enough times that his file of transgressions is the thickest in the entire district Spittle's appearances typically come in the last panel of strips that show Calvin misbehaving in class and being sent to his office, where he serves as a foil for Calvin's outlandish excuses for his anticsThe strip primarily focuses on Calvin, Hobbes, and the above mentioned secondary characters Other characters who have appeared in multiple storylines include Calvin's family doctor whom Calvin frequently gives a hard time during his check-ups, the barber, and the extraterrestrials Galaxoid and NebularCalvin imagines himself as a great many things, including dinosaurs, elephants, jungle-farers and superheroes Four of his alter egos are well-defined and recurring: As \Stupendous Man\, he pictures himself as a superhero in disguise, wearing a mask and a cape made by his mother, and narrating his own adventures Stupendous Man almost always \suffers defeat\ to his opponent, usually Calvin's mother \Spaceman Spiff\ is a heroic spacefarer As Spiff, Calvin battles aliens typically his parents or teacher and travels to distant planets his house, school, or neighborhood \Tracer Bullet,\ a hardboiled private eye, says he has eight slugs in him: \one's lead, and the rest are bourbon\ In one story, Bullet is called to a case, in which a \pushy dame\ Calvin's mother accuses him of destroying an expensive lamp broken as a result of an indoor football game between Calvin and Hobbes When Calvin imagines himself as a dinosaur, he is usually either a Tyrannosaurus rex, or an Allosaurus When Calvin daydreams about being these alter egos during school, Miss Wormwood often whacks his desk with a pointer to shock him back to attentionThere are several repeating themes in the work, a few involving Calvin's real life, and many stemming from his imagination Some of the latter are clearly flights of fantasy, while others, like Hobbes, are of an apparently dual nature and do not quite work when presumed real or unrealOver the years Calvin has had several adventures involving corrugated cardboard boxes which he adapts for many different uses Some of his many uses of cardboard boxes include: Transmogrifier Flying time machine Duplicator with ethicator enhancement Atomic Cerebral Enhance-O-Tron Emergency GROSS meeting \box of secrecy\ A stand for selling things, such as \lemonade\Building the Transmogrifier is accomplished by turning a cardboard box upside-down, attaching an arrow to the side and writing a list of choices on the box to turn into anything not stated on the box, the name is written on the remaining space Upon turning the arrow to a particular choice and pushing a button, the transmogrifier instantaneously rearranges the subject's \chemical configuration\ accompanied by a loud zapThe Duplicator is also made from a cardboard box, turned on its side Instead of the transmogrifier's \zap\ sound, it makes a \boink\ The title of one of the collections, \Scientific Progress Goes 'Boink'\, quotes a phrase that Hobbes utters upon hearing the Duplicator in operation The Duplicator produces copies of Calvin, which initially turn out to be as problematic and independent as CalvinThe Time Machine is also made from the same box, this time with its open side up Passengers climb into the open top, and must be wearing protective goggles while in time-warp Calvin first intends to travel to the future and obtain future technology that he could use to become rich in the present time Unfortunately, he faces the wrong way as he steers and ends up in prehistoric timesThe Atomic Cerebral Enhance-O-Tron is also fashioned from the same cardboard box, turned upside-down, but with three strings attached to it which are used for input, output, and grounding; the grounding string functions like a lightning rod for brainstorms so Calvin can keep his ideas \grounded in reality\ The strings are tied to a metal colander, which is worn on the head When used, the wearer of the cap receives a boost in intelligence, and his head becomes enlarged The intelligence boost, however, is temporary When it wears off, the subject's head reverts to its normal size Calvin creates the Cerebral Enhance-O-Tron in order to be able to come up with a topic for his homeworkOther kids' games are all such a bore!They've gotta have rules and they gotta keep score!Calvinball is better by far!It's never the same! It's always bizarre!You don't need a team or a referee!You know that it's great, 'cause it's named after me!Calvinball is a game played by Calvin and Hobbes as a rebellion against organized team sports; according to Hobbes, \No sport is less organized than Calvinball!\The only consistent rule is that Calvinball may never be played with the same rules twice Calvinball is essentially a game of wits and creativity rather than stamina or athletic skill, a prominent nomic self-modifying game, and one where Hobbes usually outwits Calvin himselfCalvin and Hobbes frequently ride downhill in a wagon, sled, or toboggan, depending on the season, as a device to add some physical comedy to the strip and because, according to Watterson, \it's a lot more interesting During winter, Calvin often engages in snowball fights with Hobbes or Susie, who frequently best him due to their own wit or Calvin's unreliable aim Calvin is attentive to the craft of making a good snowball or slushball, but his delight in hitting Susie in the back of the head with a well-aimed snowball is often tempered by his anxiousness to remain on Santa's \good\ list at Christmas timeCalvin is also very talented and creative at building snowmen, but he usually puts them in scenes that depict the snowmen dying or suffering in grotesque ways In one scene Calvin builds a row of saluting snowmen as a means to humiliate his dad as he returns from work \He knows I hate this,\ says his father as he proceeds up the front walk In another, to retaliate Susie's creation of a \snowwoman\, he decides to create an \anatomically correct\ snowman in the front yard His creations tend to alarm his parents due to their macabre nature In a notable storyline, Calvin builds a snowman and brings it to life in a manner reminiscent of Frankenstein's monster, and which proceeds to create more of its own kind This storyline gave the title to the Calvin and Hobbes book Attack of the Deranged Mutant Killer Monster Snow Goons, after the name Calvin gives to the first creature and its compatriots in the storyCalvin, unlike Hobbes, thinks of snowmen as fine art, worthy of highbrow criticism and expensive pricing Bill Watterson has said that this is a parody of art's \pretentious blowhards\Calvin is confronted every year with Christmas, as his mischievous nature conflicts with his greed for presents from Santa Claus which requires that he behave Calvin frets continually during the Christmas season, sometimes devising strategy by which to fool Santa Claus into giving him gifts Calvin's list of desired \loot,\ as he terms Christmas presents, is implied to include \incendiary weapons\, of which some examples are given atom bombs, torpedoes, a heat-seeking guided missile, grenade launcher, etc in dialogue Most Christmas sequences of strips depict Calvin's parents playing the role of Santa Claus by secretly placing presents beneath the Christmas Tree or in Calvin's stocking; however, one later Sunday strip depicted Santa Claus discussing Calvin's list and history with one of his assistants, although the \reality\ of this is left undefined Occasionally, a Christmas strip depicts some kindness shown by Calvin to Hobbes, as if to comment on the morals perceived as being part of the Christmas holiday One Sunday strip appeared as a poem entitled \Christmas Eve\, featuring a described scene of Calvin sleeping beside Hobbes between the Christmas Tree and a fireGROSS is Calvin's secret club, whose sole purpose is to exclude girls generally, and Susie Derkins specifically The name is an acronym that stands for Get Rid Of Slimy girlS Calvin admits \slimy girls\ is a bit redundant, as all girls are slimy, \but otherwise it doesn't spell anything\ GROSS is headquartered in a tree house Hobbes can climb up to the tree house, but Calvin requires a rope Hobbes refuses to drop down the rope until Calvin has said the password, which is an ode to tigers that is over eight verses long and occasionally accompanied by a dance Calvin and Hobbes are its only members, and each takes up multiple official titles while wearing newspaper chapeaux during meetings Most commonly, Calvin's title is Dictator-For-Life, and Hobbes is President and First Tiger The club has an anthem, but most of its words are unknown to outsiders Calvin often awards badges, promotions, etc, such as \Bottle Caps of Valor\ Many GROSS plans to annoy or otherwise attack Susie end in failure, while many meetings end in a Calvinball-style battle of rule changes or promotion granting, before degenerating into a brawlBoth the Noodle Incident and the book Hamster Huey and the Gooey Kablooie are mentioned several times in passing, but Watterson left the details to the reader's imagination \where More details are given regarding Hamster Huey and the Gooey Kablooie: it is a fictional children's book written by Mabel Syrup, it has a sequel titled Commander Coriander Salamander and 'er Singlehander Bellylander, and it is best performed with squeaky voices, gooshy sound effects, and the \Happy Hamster Hop\ In its first appearance, Calvin's dad recommended it to Calvin although Calvin was reluctant due to the fact there was not an animated adaptation of it, but nearly all subsequent references to the book show Calvin's dad's frustration at having to read the story to Calvin every eveningThere are eighteen Calvin and Hobbes books, published from 1987 to 2005 These include eleven collections, which form a complete archive of the newspaper strips, except for a single daily strip from November 28, 1985 the collections do contain a strip for this date, but it is not the same strip that appeared in some newspapers The alternate strip, a joke about Hobbes taking a bath in the washing machine, has circulated around the InternetTreasuries usually combine the two preceding collections albeit leaving out some strips with bonus material and include color reprints of Sunday comicsWatterson included a unique Easter egg in The Essential Calvin and Hobbes The back cover is a scene of a giant Calvin rampaging through a town The scene is in fact a faithful reproduction of the town square actually a triangle in Watterson's home town of Chagrin Falls, Ohio The giant Calvin has uprooted and is holding in his hands the Popcorn Shop, a small, iconic candy and ice cream shop overlooking the town's namesake fallsA complete collection of Calvin and Hobbes strips, in three hardcover volumes with a total 1440 pages, was released on October 4, 2005, by Andrews McMeel Publishing It also includes color prints of the art used on paperback covers, the treasuries' extra illustrated stories and poems, and a new introduction by Bill Watterson The alternate 1985 strip is still omitted, and two other strips January 7, 1987, and November 25, 1988 have altered dialogTo celebrate the release which coincided with the strip's ten year absence in newspapers and the twentieth anniversary of the strip, Calvin and Hobbes reruns were made available to newspapers from Sunday, September 4, 2005, through Saturday, December 31, 2005,Early books were printed in smaller format in black and white; these were later reproduced in twos in color in the \Treasuries\ Essential, Authoritative, and Indispensable, except for the contents of Attack of the Deranged Mutant Killer Monster Snow Goons Those Sunday strips were never reprinted in color until the Complete collection was finally published in 2005 Every book since Snow Goons has been printed in a larger format with Sundays in color and weekday and Saturday strips larger than they appeared in most newspapers Watterson also claims he named the books the \Essential, Authoritative, and Indispensable\ because as he says in The Calvin and Hobbes Tenth Anniversary Book, the books are \obviously none of these things\Remaining books do contain some additional content; for instance, The Calvin and Hobbes Lazy Sunday Book contains a long watercolor Spaceman Spiff epic not seen elsewhere until Complete, and The Calvin and Hobbes Tenth Anniversary Book contains much original commentary from Watterson Calvin and Hobbes: Sunday Pages 1985–1995 contains 36 Sunday strips in color alongside Watterson's original sketches, prepared for an exhibition at The Ohio State University Cartoon Research LibraryAn officially licensed children's textbook entitled Teaching with Calvin and Hobbes was published in a limited single print-run in 1993 The book includes various Calvin and Hobbes strips together with lessons and questions to follow, such as, \What do you think the principal meant when he said they had quite a file on Calvin\ 108 The book is very rare and increasingly sought by collectorsEOD;We have now completely before us the dialectic play of cosmological ideas. The ideas are such that an object congruent with them can never be given in any possible experience, and that even in thought reason is unable to bring them into harmony with the universal laws of nature. Yet they are not arbitrarily conceived. Reason, in the continuous advance of empirical synthesis, is necessarily led up to them whenever it endeavours to free from all conditions and apprehend in its unconditioned totality that which according to the rules of experience can never be determined save as conditioned.These pseudo-rational assertions are so many attempts to solve four natural and unavoidable problems of reason. There are just so many, neither more nor fewer, owing to the fact that there are just four series of synthetic presuppositions which impose a priori limitations on the empirical synthesis.The proud pretensions of reason, when it strives to extend its domain beyond all limits of experience, we have represented only in dry formulas that contain merely the ground of their legal claims. As befits a transcendental philosophy, they have been divested of all empirical features, although only in connection therewith can their full splendour be displayed. But in this empirical application, and in the progressive extension of the employment of reason, philosophy, beginning with the field of our experiences and steadily soaring to these lofty ideas, displays a dignity and worth such that, could it but make good its pretensions, it would leave all other human science far behind. For it promises a secure foundation for our highest expectations in respect of those ultimate ends towards which all the endeavours of reason must ultimately converge.Whether the world has a beginning [in time] and any limit to its extension in space; whether there is anywhere, and perhaps in my thinking self, an indivisible and indestructible unity, or nothing but what is divisible and transitory; whether I am free in my actions or, like other beings, am led by the hand of nature and of fate; whether finally there is a supreme cause of the world, or whether the things of nature and their order must as the ultimate object terminate thought — an object that even in our speculations can never be transcended: these are questions for the solution of which the mathematician would gladly exchange the whole of his science. For mathematics can yield no satisfaction in regard to those highest ends that most closely concern humanity. And yet the very dignity of mathematics (that pride of human reason) rests upon this, that it guides reason to knowledge of nature in its order and regularity — alike in what is great in it and in what is small — and in the extraordinary unity of its moving forces, thus rising to a degree of insight far beyond what any philosophy based on ordinary experience would lead us to expect; and so gives occasion and encouragement to an employment of reason that is extended beyond all experience, and at the same time supplies it with the most excellent materials for supporting its investigations — so far as the character of these permits — by appropriate intuitions.Unfortunately for speculation, though fortunately perhaps for the practical interests of humanity, reason, in the midst of its highest expectations, finds itself so compromised by the conflict of opposing arguments, that neither its honour nor its security allows it to withdraw and treat the quarrel with indifference as a mere mock fight; and still less is it in a position to command peace, being itself directly interested in the matters in dispute. Accordingly, nothing remains for reason save to consider whether the origin of this conflict, whereby it is divided against itself, may not have arisen from a mere misunderstanding. In such an enquiry both parties, per chance, may have to sacrifice proud claims; but a lasting and peaceful reign of reason over understanding and the senses would thereby be inaugurated.For the present we shall defer this thorough enquiry, in order first of all to consider upon which side we should prefer to fight, should we be compelled to make choice between the opposing parties. The raising of this question, how we should proceed if we consulted only our interest and not the logical criterion of truth, will decide nothing in regard to the contested rights of the two parties, but has this advantage, that it enables us to comprehend why the participants in this quarrel, though not influenced by any superior insight into the matter under dispute, have preferred to fight on one side rather than on the other. It will also cast light on a number of incidental points, for instance, the passionate zeal of the one party and the calm assurance of the other; and will explain why the world hails the one with eager approval, and is implacably prejudiced against the other.Comparison of the principles which form the starting-points of the two parties is what enables us, as we shall find, to determine the standpoint from which alone this preliminary enquiry can be carried out with the required thoroughness. In the assertions of the antithesis we observe a perfect uniformity in manner of thinking and complete unity of maxims, namely a principle of pure empiricism, applied not only in explanation of the appearances within the world, but also in the solution of the transcendental ideas of the world itself, in its totality. The assertions of the thesis, on the other hand, pre-suppose, in addition to the empirical mode of explanation employed within the series of appearances, intelligible beginnings; and to this extent its maxim is complex. But as its essential and distinguishing characteristic is the presupposition of intelligible beginnings, I shall entitle it the dogmatism of pure reason.In the determination of the cosmological ideas, we find on the side of dogmatism, that is, of the thesis: First, a certain practical interest in which every right-thinking man, if he has understanding of what truly concerns him, heartily shares. That the world has a beginning, that my thinking self is of simple and therefore indestructible nature, that it is free in its voluntary actions and raised above the compulsion of nature, and finally that all order in the things constituting the world is due to a primordial being, from which everything derives its unity and purposive connection — these are so many foundation stones of morals and religion. The antithesis robs us of all these supports, or at least appears to do so.Secondly, reason has a speculative interest on the side of the thesis. When the transcendental ideas are postulated and employed in the manner prescribed by the thesis, the entire chain of conditions and the derivation of the conditioned can be grasped completely a priori. For we then start from the unconditioned. This is not done by the antithesis, which for this reason is at a very serious disadvantage. To the question as to the conditions of its synthesis it can give no answer which does not lead to the endless renewal of the same enquiry.According to the antithesis, every given beginning compels us to advance to one still higher; every part leads to a still smaller part; every event is preceded by another event as its cause; and the conditions of existence in general rest always again upon other conditions, without ever obtaining unconditioned footing and support in any self-subsistent thing, viewed as primordial being.Thirdly, the thesis has also the advantage of popularity; and this certainly forms no small part of its claim to favour.The common understanding finds not the least difficulty in the idea of the unconditioned beginning of all synthesis. Being more accustomed to descend to consequences than to ascend to grounds, it does not puzzle over the possibility of the absolutely first; on the contrary, it finds comfort in such concepts, and at the same time a fixed point to which the thread by which it guides its movements can be attached. In the restless ascent from the conditioned to the condition, always with one foot in the air, there can be no satisfaction.In the determination of the cosmological ideas we find on the side of empiricism, that is, of the antithesis: first, no such practical interest (due to pure principles of reason) as is provided for the thesis by morals and religion. On the contrary, pure empiricism appears to deprive them of all power and influence. If there is no primordial being distinct from the world, if the world is without beginning and therefore without an Author, if our will is not free, and the soul is divisible and perishable like matter, moral ideas and principles lose all validity, and share in the fate of the transcendental ideas which served as their theoretical support.But secondly, in compensation, empiricism yields advantages to the speculative interest of reason, which are very attractive and far surpass those which dogmatic teaching bearing on the ideas of reason can offer. According to the principle of empiricism the understanding is always on its own proper ground, namely, the field of genuinely possible experiences, investigating their laws, and by means of these laws affording indefinite extension to the sure and comprehensible knowledge which it supplies. Here every object, both in itself and in its relations, can and ought to be represented in intuition, or at least in concepts for which the corresponding images can be clearly and distinctly provided in given similar intuitions. There is no necessity to leave the chain of the natural order and to resort to ideas, the objects of which are not known, because, as mere thought-entities, they can never be given. Indeed, the understanding is not permitted to leave its proper business, and under the pretence of having brought it to completion to pass over into the sphere of idealising reason and of transcendent concepts — a sphere in which it is no longer necessary for it to observe and investigate in accordance with the laws of nature, but only to think and to invent in the assurance that it cannot be refuted by the facts of nature, not being bound by the evidence which they yield, but presuming to pass them by or even to subordinate them to a higher authority, namely, that of pure reason.The empiricist will never allow, therefore, that any epoch of nature is to be taken as the absolutely first, or that any limit of his insight into the extent of nature is to be regarded as the widest possible. Nor does he permit any transition from the objects of nature — which he can analyse through observation and mathematics, and synthetically determine in intuition (the extended) — to those which neither sense nor imagination can ever represent in concreto (the simple). Nor will he admit the legitimacy of assuming in nature itself any power that operates independently of the laws of nature (freedom), and so of encroaching upon the business of the understanding, which is that of investigating, according to necessary rules, the origin of appearances. And, lastly, he will not grant that a cause ought ever to be sought outside nature, in an original being. We know nothing but nature, since it alone can present objects to us and instruct us in regard to their laws.If the empirical philosopher had no other purpose in propounding his antithesis than to subdue the rashness and presumption of those who so far misconstrue the true vocation of reason as to boast of insight and knowledge just where true insight and knowledge cease, and to represent as furthering speculative interests that which is valid only in relation to practical interests (in order, as may suit their convenience, to break the thread of physical enquiries, and then under the pretence of extending knowledge to fasten it to transcendental ideas, through which we really know only that we know nothing); if, I say, the empiricist were satisfied with this, his principle would be a maxim urging moderation in our pretensions, modesty in our assertions, and yet at the same time the greatest possible extension of our understanding, through the teacher fittingly assigned to us, namely, through experience. If such were our procedure, we should not be cut off from employing intellectual presuppositions and faith on behalf of our practical interest; only they could never be permitted to assume the title and dignity of science and rational insight. Knowledge, which as such is speculative, can have no other object than that supplied by experience; if we transcend the limits thus imposed, the synthesis which seeks, independently of experience, new species of knowledge, lacks that substratum of intuition upon which alone it can be exercised.But when empiricism itself, as frequently happens, becomes dogmatic in its attitude towards ideas, and confidently denies whatever lies beyond the sphere of its intuitive knowledge, it betrays the same lack of modesty; and this is all the more reprehensible owing to the irreparable injury which is thereby caused to the practical interests of reason.The contrast between the teaching of Epicurus and that of Plato is of this nature.Each of the two types of philosophy says more than it knows. The former encourages and furthers knowledge, though to the prejudice of the practical; the latter supplies excellent practical principles, but it permits reason to indulge in ideal explanations of natural appearances, in regard to which a speculative knowledge is alone possible to us — to the neglect of physical investigation.Finally, as regards the third factor which has to be considered in a preliminary choice between the two conflicting parties, it is extremely surprising that empiricism should be so universally unpopular. The common understanding, it might be supposed, would eagerly adopt a programme which promises to satisfy it through exclusively empirical knowledge and the rational connections there revealed — in preference to the transcendental dogmatism which compels it to rise to concepts far outstripping the insight and rational faculties of the most practised thinkers. But this is precisely what commends such dogmatism to the common understanding. For it then finds itself in a position in which the most learned can claim no advantage over it. If it understands little or nothing about these matters, no one can boast of understanding much more; and though in regard to them it cannot express itself in so scholastically correct a manner as those with special training, nevertheless there is no end to the plausible arguments which it can propound, wandering as it does amidst mere ideas, about which no one knows anything, and in regard to which it is therefore free to be as eloquent as it pleases; whereas when matters that involve the investigation of nature are in question, it has to stand silent and to admit its ignorance. Thus indolence and vanity combine in sturdy support of these principles. Besides, although the philosopher finds it extremely hard to accept a principle for which he can give no justification, still more to employ concepts the objective reality of which he is unable to establish, nothing is more usual in the case of the common understanding. It insists upon having something from which it can make a confident start. The difficulty of even conceiving this presupposed starting-point does not disquiet it. Since it is unaware what conceiving really means, it never occurs to it to reflect upon the assumption; it accepts as known whatever is familiar to it through frequent use. For the common understanding, indeed, all speculative interests pale before the practical; and it imagines that it comprehends and knows what its fears or hopes incite it to assume or to believe.Thus empiricism is entirely devoid of the popularity of transcendentally idealising reason; and however prejudicial such empiricism may be to the highest practical principles, there is no need to fear that it will ever pass the limits of the Schools, and acquire any considerable influence in the general life or any real favour among the multitude.Human reason is by nature architectonic. That is to say, it regards all our knowledge as belonging to a possible system, and therefore allows only such principles as do not at any rate make it impossible for any knowledge that we may attain to combine into a system with other knowledge. But the propositions of the antithesis are of such a kind that they render the completion of the edifice of knowledge quite impossible. They maintain that there is always to be found beyond every state of the world a more ancient state, in every part yet other parts similarly divisible, prior to every event still another event which itself again is likewise generated, and that in existence in general everything is conditioned, an unconditioned and first existence being nowhere discernible. Since, therefore, the antithesis thus refuses to admit as first or as a beginning anything that could serve as a foundation for building, a complete edifice of knowledge is, on such assumptions, altogether impossible. Thus the architectonic interest of reason — the demand not for empirical but for pure a priori unity of reason — forms a natural recommendation for the assertions of the thesis.If men could free themselves from all such interests, and consider the assertions of reason irrespective of their consequences, solely in view of the intrinsic force of their grounds, and were the only way of escape from their perplexities to give adhesion to one or other of the opposing parties, their state would be one of continuous vacillation. To-day it would be their conviction that the human will is free; tomorrow, dwelling in reflection upon the indissoluble chain of nature, they would hold that freedom is nothing but self-deception, that everything is simply nature. If, however, they were summoned to action, this play of the merely speculative reason would, like a dream, at once cease, and they would choose their principles exclusively in accordance with practical interests. Since, however, it is fitting that a reflective and enquiring being should devote a certain amount of time to the examination of his own reason, entirely divesting himself of all partiality and openly submitting his observations to the judgment of others, no one can be blamed for, much less prohibited from, presenting for trial the two opposing parties, leaving them, terrorised by no threats, to defend themselves as best they can, before a jury of like standing with themselves, that is, before a jury of fallible men.§ 4THE ABSOLUTE NECESSITY OF A SOLUTION OF THE TRANSCENDENTAL PROBLEMS OF PURE REASONTo profess to solve all problems and to answer all questions would be impudent boasting, and would argue such extravagant self-conceit as at once to forfeit all confidence. Nevertheless there are sciences the very nature of which requires that every question arising within their domain should be completely answerable in terms of what is known, inasmuch as the answer must issue from the same sources from which the question proceeds. In these sciences it is not permissible to plead unavoidable ignorance; the solution can be demanded.We must be able, in every possible case, in accordance with a rule, to know what is right and what is wrong, since this concerns our obligation, and we have no obligation to that which we cannot know. In the explanation of natural appearances, on the other hand, much must remain uncertain and many questions insoluble, because what we know of nature is by no means sufficient, in all cases, to account for what has to be explained. The question, therefore, is whether in transcendental philosophy there is any question relating to an object presented to pure reason which is unanswerable by this reason, and whether we may rightly excuse ourselves from giving a decisive answer. In thus excusing ourselves, we should have to show that any knowledge which we can acquire still leaves us in complete uncertainty as to what should be ascribed to the object, and that while we do indeed have a concept sufficient to raise a question, we are entirely lacking in materials or power to answer the same.Now I maintain that transcendental philosophy is unique in the whole field of speculative knowledge, in that no question which concerns an object given to pure reason can be insoluble for this same human reason, and that no excuse of an unavoidable ignorance, or of the problem's unfathomable depth, can release us from the obligation to answer it thoroughly and completely. That very concept which puts us in a position to ask the question must also qualify us to answer it, since, as in the case of right and wrong, the object is not to be met with outside the concept.In transcendental philosophy, however, the only questions to which we have the right to demand a sufficient answer bearing on the constitution of the object, and from answering which the philosopher is not permitted to excuse himself on the plea of their impenetrable obscurity, are the cosmological.These questions [bearing on the constitution of the object] must refer exclusively to cosmological ideas. For the object must be given empirically, the question being only as to its conformity to an idea. If, on the other hand, the object is transcendental, and therefore itself unknown; if, for instance, the question be whether that something, the appearance of which (in ourselves) is thought (soul), is in itself a simple being, whether there is an absolutely necessary cause of all things, and so forth, what we have then to do is in each case to seek an object for our idea; and we may well confess that this object is unknown to us, though not therefore impossible.[Although to the question, what is the constitution of a transcendental object, no answer can be given stating what it is, we can yet reply that the question itself is nothing, because there is no given object corresponding to it. Accordingly all questions dealt with in the transcendental doctrine of the soul are answerable in this latter manner, and have indeed been so answered; its questions refer to the transcendental subject of all inner appearances, which is not itself appearance and consequently not given as object, and in which none of the categories (and it is to them that the question is really directed) meet with the conditions required for their application. We have here a case where the common saying holds, that no answer is itself an answer. A question as to the constitution of that something which cannot be thought through any determinate predicate — inasmuch as it is completely outside the sphere of those objects which can be given to us — is entirely null and void.]The cosmological ideas alone have the peculiarity that they can presuppose their object, and the empirical synthesis required for its concept, as being given. The question which arises out of these ideas refers only to the advance in this synthesis, that is, whether it should be carried so far as to contain absolute totality — such totality, since it cannot be given in any experience, being no longer empirical. Since we are here dealing solely with a thing as object of a possible experience, not as a thing in itself, the answer to the transcendent cosmological question cannot lie anywhere save in the idea. We are not asking what is the constitution of any object in itself, nor as regards possible experience are we enquiring what can be given in concreto in any experience. Our sole question is as to what lies in the idea, to which the empirical synthesis can do no more than merely approximate; the question must therefore be capable of being solved entirely from the idea.Since the idea is a mere creature of reason, reason cannot disclaim its responsibility and saddle it upon the unknown object.It is not so extraordinary as at first seems the case, that a science should be in a position to demand and expect none but assured answers to all the questions within its domain (quaestiones domesticae), although up to the present they have perhaps not been found. In addition to transcendental philosophy, there are two pure rational sciences, one purely speculative, the other with a practical content, namely, pure mathematics and pure ethics. Has it ever been suggested that, because of our necessary ignorance of the conditions, it must remain uncertain what exact relation, in rational or irrational numbers, a diameter bears to a circle? Since no adequate solution in terms of rational numbers is possible, and no solution in terms of irrational numbers has yet been discovered, it was concluded that at least the impossibility of a solution can be known with certainty, and of this impossibility Lambert has given the required proof. In the universal principles of morals nothing can be uncertain, because the principles are either altogether void and meaningless, or must be derived from the concepts of our reason. In natural science, on the other hand, there is endless conjecture, and certainty is not to be counted upon. For the natural appearances are objects which are given to us independently of our concepts, and the key to them lies not in us and our pure thinking, but outside us; and therefore in many cases, since the key is not to be found, an assured solution is not to be expected. I am not, of course, here referring to those questions of the Transcendental Analytic which concern the deduction of our pure knowledge; we are at present treating only of the certainty of judgments with respect to their objects and not with respect to the source of our concepts themselves.The obligation of an at least critical solution of the questions which reason thus propounds to itself, we cannot, therefore, escape by complaints of the narrow limits of our reason, and by confessing, under the pretext of a humility based on self-knowledge, that it is beyond the power of our reason to determine whether the world exists from eternity or has a beginning; whether cosmical space is filled with beings to infinitude, or is enclosed within certain limits; whether anything in the world is simple, or everything such as to be infinitely divisible; whether there is generation and production through freedom, or whether everything depends on the chain of events in the natural order; and finally whether there exists any being completely unconditioned and necessary in itself, or whether everything is conditioned in its existence and therefore dependent on external things and itself contingent. All these questions refer to an object which can be found nowhere save in our thoughts, namely, to the absolutely unconditioned totality of the synthesis of appearances. If from our own concepts we are unable to assert and determine anything certain, we must not throw the blame upon the object as concealing itself from us. Since such an object is nowhere to be met with outside our idea, it is not possible for it to be given. The cause of failure we must seek in our idea itself. For so long as we obstinately persist in assuming that there is an actual object corresponding to the idea, the problem, as thus viewed, allows of no solution. A clear exposition of the dialectic which lies within our concept itself would soon yield us complete certainty how we ought to judge in reference to such a question.The pretext that we are unable to obtain certainty in regard to these problems can be at once met with the following question which certainly calls for a clear answer: Whence come those ideas, the solution of which involves us in such difficulty? Is it, perchance, appearances that demand explanation, and do we, in accordance with these ideas, have to seek only the principles or rules of their exposition? Even if we suppose the whole of nature to be spread out before us, and that of all that is presented to our intuition nothing is concealed from our senses and consciousness, yet still through no experience could the object of our ideas be known by us in concreto. For that purpose, in addition to this exhaustive intuition, we should require what is not possible through any empirical knowledge, namely, a completed synthesis and the consciousness of its absolute totality. Accordingly our question does not require to be raised in the explanation of any given appearance, and is therefore not a question which can be regarded as imposed on us by the object itself. The object can never come before us, since it cannot be given through any possible experience. In all possible perceptions we always remain involved in conditions, whether in space or in time, and come upon nothing unconditioned requiring us to determine whether this unconditioned is to be located in an absolute beginning of synthesis, or in an absolute totality of a series that has no beginning.In its empirical meaning, the term 'whole' is always only comparative. The absolute whole of quantity (the universe), the whole of division, of derivation, of the condition of existence in general, with all questions as to whether it is brought about through finite synthesis or through a synthesis requiring infinite extension, have nothing to do with any possible experience.We should not, for instance, in any wise be able to explain the appearances of a body better, or even differently, in assuming that it consisted either of simple or of inexhaustibly composite parts; for neither a simple appearance nor an infinite composition can ever come before us. Appearances demand explanation only so far as the conditions of their explanation are given in perception; but all that may ever be given in this way, when taken together in an absolute whole, is not itself a perception. Yet it is just the explanation of this very whole that is demanded in the transcendental problems of reason.Thus the solution of these problems can never be found in experience, and this is precisely the reason why we should not say that it is uncertain what should be ascribed to the object [of our idea]. For as our object is only in our brain, and cannot be given outside it, we have only to take care to be at one with ourselves, and to avoid that amphiboly which transforms our idea into a supposed representation of an object that is empirically given and therefore to be known according to the laws of experience. The dogmatic solution is therefore not only uncertain, but impossible. The critical solution, which allows of complete certainty, does not consider the question objectively, but in relation to the foundation of the knowledge upon which the question is based.§ 5SCEPTICAL REPRESENTATION OF THE COSMOLOGICAL QUESTIONS IN THE FOUR TRANSCENDENTAL IDEASWe should of ourselves desist from the demand that our questions be answered dogmatically, if from the start we understood that whatever the dogmatic answer might turn out to be it would only increase our ignorance, and cast us from one inconceivability into another, from one obscurity into another still greater, and perhaps even into contradictions. If our question is directed simply to a yes or no, we are well advised to leave aside the supposed grounds of the answer, and first consider what we should gain according as the answer is in the affirmative or in the negative. Should we then find that in both cases the outcome is mere nonsense, there will be good reason for instituting a critical examination of our question, to determine whether the question does not itself rest on a groundless presupposition, in that it plays with an idea the falsity of which can be more easily detected through study of its application and consequences than in its own separate representation.This is the great utility of the sceptical mode of dealing with the questions which pure reason puts to pure reason. By its means we can deliver ourselves, at but a small cost, from a great body of sterile dogmatism, and set in its place a sober critique, which as a true cathartic will effectively guard us against such groundless beliefs and the supposed polymathy to which they lead.If therefore, in dealing with a cosmological idea, I were able to appreciate beforehand that whatever view may be taken of the unconditioned in the successive synthesis of appearances, it must either be too large or too small for any concept of the understanding, I should be in a position to understand that since the cosmological idea has no bearing save upon an object of experience which has to be in conformity with a possible concept of the understanding, it must be entirely empty and without meaning; for its object, view it as we may, cannot be made to agree with it. This is in fact the case with all cosmical concepts; and this is why reason, so long as it holds to them, is involved in an unavoidable antinomy. For suppose: —First, that the world has no beginning: it is then too large for our concept, which, consisting as it does in a successive regress, can never reach the whole eternity that has elapsed. Or suppose that the world has a beginning, it will then, in the necessary empirical regress, be too small for the concept of the understanding. For since the beginning still presupposes a time which precedes it, it is still not unconditioned; and the law of the empirical employment of the understanding therefore obliges us to look for a higher temporal condition; and the world [as limited in time] is therefore obviously too small for this law.This is also true of the twofold answer to the question regarding the magnitude of the world in space. If it is infinite and unlimited, it is too large for any possible empirical concept. If it is finite and limited, we have a right to ask what determines these limits. Empty space is no self-subsistent correlate of things, and cannot be a condition at which we could stop; still less can it be an empirical condition, forming part of a possible experience. (For how can there be any experience of the absolutely void? ) And yet to obtain absolute totality in the empirical synthesis it is always necessary that the unconditioned be an empirical concept. Consequently, a limited world is too small for our concept.Secondly, if every appearance in space (matter) consists of infinitely many parts, the regress in the division will always be too large for our concept; while if the division of space is to stop at any member of the division (the simple), the regress will be too small for the idea of the unconditioned. For this member always still allows of a regress to further parts contained in it.Thirdly, if we suppose that nothing happens in the world save in accordance with the laws of nature, the causality of the cause will always itself be something that happens, making necessary a regress to a still higher cause, and thus a continuation of the series of conditions a parte priori without end. Nature, as working always through efficient causes, is thus too large for any of the concepts which we can employ in the synthesis of cosmical events.If, in certain cases, we admit the occurrence of self-caused events, that is, generation through freedom, then by an unavoidable law of nature the question 'why' still pursues us, constraining us, in accordance with the law of causality which governs experience, to pass beyond such events; and we thus find that such totality of connection is too small for our necessary empirical concept.Fourthly, if we admit an absolutely necessary being (whether it be the world itself, or something in the world, or the cause of the world), we set it in a time infinitely remote from any given point of time, because otherwise it would be dependent upon another and antecedent being. But such an existence is then too large for our empirical concept, and is unapproachable through any regress, however far this be carried.If, again, we hold that everything belonging to the world (whether as conditioned or as condition) is contingent, any and every given existence is too small for our concept. For we are constrained always still to look about for some other existence upon which it is dependent.We have said that in all these cases the cosmical idea is either too large or too small for the empirical regress, and therefore for any possible concept of the understanding. We have thus been maintaining that the fault lies with the idea, in being too large or too small for that to which it is directed, namely, possible experience. Why have we not expressed ourselves in the opposite manner, saying that in the former case the empirical concept is always too small for the idea, and in the latter too large, and that the blame therefore attaches to the empirical regress? The reason is this. Possible experience is that which can alone give reality to our concepts; in its absence a concept is a mere idea, without truth, that is, without relation to any object. The possible empirical concept is therefore the standard by which we must judge whether the idea is a mere idea and thought-entity, or whether it finds its object in the world. For we can say of anything that it is too large or too small relatively to something else, only if the former is required for the sake of the latter, and has to be adapted to it.Among the puzzles propounded in the ancient dialectical Schools was the question, whether, if a ball cannot pass through a hole, we should say that the ball is too large or the hole too small. In such a case it is a matter of indifference how we choose to express ourselves, for we do not know which exists for the sake of the other. In the case, however, of a man and his coat, we do not say that a man is too tall for his coat, but that the coat is too short for the man.We have thus been led to what is at least a well-grounded suspicion that the cosmological ideas, and with them all the mutually conflicting pseudo-rational assertions, may perhaps rest on an empty and merely fictitious concept of the manner in which the object of these ideas is given to us; and this suspicion may set us on the right path for laying bare the illusion which has so long led us astray.§ 6TRANSCENDENTAL IDEALISM AS THE KEY TO THE SOLUTION OF THE COSMOLOGICAL DIALECTICWe have sufficiently proved in the Transcendental Aesthetic that everything intuited in space or time, and therefore all objects of any experience possible to us, are nothing but appearances, that is, mere representations, which, in the manner in which they are represented, as extended beings, or as series of alterations, have no independent existence outside our thoughts. This doctrine I entitle transcendental idealism. [I have also, elsewhere, sometimes entitled it formal idealism, to distinguish it from material idealism, that is, from the usual type of idealism which doubts or denies the existence of outer things themselves.] The realist, in the transcendental meaning of this term, treats these modifications of our sensibility as self-subsistent things, that is, treats mere representations as things in themselves.It would be unjust to ascribe to us that long-decried empirical idealism, which, while it admits the genuine reality of space, denies the existence of the extended beings in it, or at least considers their existence doubtful, and so does not in this regard allow of any properly demonstrable distinction between truth and dreams. As to the appearances of inner sense in time, empirical idealism finds no difficulty in regarding them as real things; indeed it even asserts that this inner experience is the sufficient as well as the only proof of the actual existence of its object (in itself, with all this time-determination).Our transcendental idealism, on the contrary, admits the reality of the objects of outer intuition, as intuited in space, and of all changes in time, as represented by inner sense. For since space is a form of that intuition which we entitle outer, and since without objects in space there would be no empirical representation whatsoever, we can and must regard the extended beings in it as real; and the same is true of time. But this space and this time, and with them all appearances, are not in themselves things; they are nothing but representations, and cannot exist outside our mind. Even the inner and sensible intuition of our mind (as object of consciousness) which is represented as being determined by the succession of different states in time, is not the self proper, as it exists in itself — that is, is not the transcendental subject — but only an appearance that has been given to the sensibility of this, to us unknown, being.This inner appearance cannot be admitted to exist in any such manner in and by itself; for it is conditioned by time, and time cannot be a determination of a thing in itself. The empirical truth of appearances in space and time is, however, sufficiently secured; it is adequately distinguished from dreams, if both dreams and genuine appearances cohere truly and completely in one experience, in accordance with empirical laws.The objects of experience, then, are never given in themselves, but only in experience, and have no existence outside it. That there may be inhabitants in the moon, although no one has ever perceived them, must certainly be admitted. This, however, only means that in the possible advance of experience we may encounter them. For everything is real which stands in connection with a perception in accordance with the laws of empirical advance. They are therefore real if they stand in an empirical connection with my actual consciousness, although they are not for that reason real in themselves, that is, outside this advance of experience.Nothing is really given us save perception and the empirical advance from this to other possible perceptions. For the appearances, as mere representations, are in themselves real only in perception, which perception is in fact nothing but the reality of an empirical representation, that is, appearance. To call an appearance a real thing prior to our perceiving it, either means that in the advance of experience we must meet with such a perception, or it means nothing at all. For if we were speaking of a thing in itself, we could indeed say that it exists in itself apart from relation to our senses and possible experience. But we are here speaking only of an appearance in space and time, which are not determinations of things in themselves but only of our sensibility. Accordingly, that which is in space and time is an appearance; it is not anything in itself but consists merely of representations, which, if not given in us -that is to say, in perception — are nowhere to be met with.The faculty of sensible intuition is strictly only a receptivity, a capacity of being affected in a certain manner with representations, the relation of which to one another is a pure intuition of space and of time (mere forms of our sensibility), and which, in so far as they are connected in this manner in space and time, and are determinable according to laws of the unity of experience, are entitled objects. The non-sensible cause of these representations is completely unknown to us, and cannot therefore be intuited by us as object. For such an object would have to be represented as neither in space nor in time (these being merely conditions of sensible representation), and apart from such conditions we cannot think any intuition. We may, however, entitle the purely intelligible cause of appearances in general the transcendental object, but merely in order to have something corresponding to sensibility viewed as a receptivity.To this transcendental object we can ascribe the whole extent and connection of our possible perceptions, and can say that it is given in itself prior to all experience. But the appearances, while conforming to it, are not given in themselves, but only in this experience, being mere representations, which as perceptions can mark out a real object only in so far as the perception connects with all others according to the rules of the unity of experience. Thus we can say that the real things of past time are given in the transcendental object of experience; but they are objects for me and real in past time only in so far as I represent to myself (either by the light of history or by the guiding-clues of causes and effects) that a regressive series of possible perceptions in accordance with empirical laws, in a word, that the course of the world, conducts us to a past time-series as condition of the present time — a series which, however, can be represented as actual not in itself but only in the connection of a possible experience. Accordingly, all events which have taken place in the immense periods that have preceded my own existence mean really nothing but the possibility of extending the chain of experience from the present perception back to the conditions which determine this perception in respect of time.If, therefore, I represent to myself all existing objects of the senses in all time and in all places, I do not set them in space and time [as being there] prior to experience. This representation is nothing but the thought of a possible experience in its absolute completeness. Since the objects are nothing but mere representations, only in such a possible experience are they given. To say that they exist prior to all my experience is only to assert that they are to be met with if, starting from perception, I advance to that part of experience to which they belong. The cause of the empirical conditions of this advance (that which determines what members I shall meet with, or how far I can meet with any such in my regress) is transcendental, and is therefore necessarily unknown to me. We are not, however, concerned with this transcendental cause, but only with the rule of the advance in the experience in which objects, that is to say, appearances, are given to me. Moreover, in outcome it is a matter of indifference whether I say that in the empirical advance in space I can meet with stars a hundred times farther removed than the outermost now perceptible to me, or whether I say that they are perhaps to be met with in cosmical space even though no human being has ever perceived or ever will perceive them. For even supposing they were given as things in themselves, without relation to possible experience, it still remains true that they are nothing to me, and therefore are not objects, save in so far as they are contained in the series of the empirical regress. Only in another sort of relation, when these appearances would be used for the cosmological idea of an absolute whole, and when, therefore, we are dealing with a question which oversteps the limits of possible experience, does distinction of the mode in which we view the reality of those objects of the senses become of importance, as serving to guard us against a deceptive error which is bound to arise if we misinterpret our empirical concepts.§ 7CRITICAL SOLUTION OF THE COSMOLOGICAL CONFLICT OF REASON WITH ITSELFThe whole antinomy of pure reason rests upon the dialectical argument: If the conditioned is given, the entire series of all its conditions is likewise given; objects of the senses are given as conditioned; therefore, etc. Through this syllogism, the major premise of which appears so natural and evident, as many cosmological ideas are introduced as there are differences in the conditions (in the synthesis of appearances) that constitute a series. The ideas postulate absolute totality of these series; and thereby they set reason in unavoidable conflict with itself. We shall be in a better position to detect what is deceptive in this pseudo-rational argument, if we first correct and define some of the concepts employed in it.In the first place, it is evident beyond all possibility of doubt, that if the conditioned is given, a regress in the series of all its conditions is set us as a task. For it is involved in the very concept of the conditioned that something is referred to a condition, and if this condition is again itself conditioned, to a more remote condition, and so through all the members of the series. The above proposition is thus analytic, and has nothing to fear from a transcendental criticism. It is a logical postulate of reason, that through the understanding we follow up and extend as far as possible that connection of a concept with its conditions which directly results from the concept itself.Further, if the conditioned as well as its condition are things in themselves, then upon the former being given, the regress to the latter is not only set as a task, but therewith already really given. And since this holds of all members of the series, the complete series of the conditions, and therefore the unconditioned, is given therewith, or rather is presupposed in view of the fact that the conditioned, which is only possible through the complete series, is given. The synthesis of the conditioned with its condition is here a synthesis of the mere understanding, which represents things as they are, without considering whether and how we can obtain knowledge of them. If, however, what we are dealing with are appearances — as mere representations appearances cannot be given save in so far as I attain knowledge of them, or rather attain them in themselves, for they are nothing but empirical modes of knowledge — I cannot say, in the same sense of the terms, that if the conditioned is given, all its conditions (as appearances) are likewise given, and therefore cannot in any way infer the absolute totality of the series of its conditions. The appearances are in their apprehension themselves nothing but an empirical synthesis in space and time, and are given only in this synthesis. It does not, therefore, follow, that if the conditioned, in the [field of] appearance, is given, the synthesis which constitutes its empirical condition is given therewith and is presupposed. This synthesis first occurs in the regress, and never exists without it. What we can say is that a regress to the conditions, that is, a continued empirical synthesis, on the side of the conditions, is enjoined or set as a task, and that in this regress there can be no lack of given conditions.These considerations make it clear that the major premise of the cosmological inference takes the conditioned in the transcendental sense of a pure category, while the minor premise takes it in the empirical sense of a concept of the understanding applied to mere appearances. The argument thus commits that dialectical fallacy which is entitled sophisma figurae dictionis. This fallacy is not, however, an artificial one; a quite natural illusion of our common reason leads us, when anything is given as conditioned, thus to assume in the major premise, as it were without thought or question, its conditions and their series. This assumption is indeed simply the logical requirement that we should have adequate premises for any given conclusion. Also, there is no reference to a time-order in the connection of the conditioned with its condition; they are presupposed as given together with it. Further, it is no less natural, in the minor premise, to regard appearances both as things in themselves and as objects given to the pure understanding, than to proceed as we have done in the major, in which we have [similarly] abstracted from all those conditions of intuition under which alone objects can be given. Yet in so doing we have overlooked an important distinction between the concepts. The synthesis of the conditioned with its conditions (and the whole series of the latter) does not in the major premise carry with it any limitation through time or any concept of succession. The empirical synthesis, on the other hand, that is, the series of the conditions in appearance, as subsumed in the minor premise, is necessarily successive, the members of the series being given only as following upon one another in time; and I have therefore, in this case, no right to assume the absolute totality of the synthesis and of the series thereby represented. In the major premise all the members of the series are given in themselves, without any condition of time, but in this minor premise they are possible only through the successive regress, which is given only in the process in which it is actually carried out.When this error has thus been shown to be involved in the argument upon which both parties alike base their cosmological assertions, both might justly be dismissed, as being unable to offer any sufficient title in support of their claims.But the quarrel is not thereby ended — as if one or both of the parties had been proved to be wrong in the actual doctrines they assert, that is, in the conclusions of their arguments. For although they have failed to support their contentions by valid grounds of proof, nothing seems to be clearer than that since one of them asserts that the world has a beginning and the other that it has no beginning and is from eternity, one of the two must be in the right. But even if this be so, none the less, since the arguments on both sides are equally clear, it is impossible to decide between them. The parties may be commanded to keep the peace before the tribunal of reason; but the controversy none the less continues. There can therefore be no way of settling it once for all and to the satisfaction of both sides, save by their becoming convinced that the very fact of their being able so admirably to refute one another is evidence that they are really quarrelling about nothing, and that a certain transcendental illusion has mocked them with a reality where none is to be found. This is the path which we shall now proceed to follow in the settlement of a dispute that defies all attempts to come to a decision.* * *Zeno of Elea, a subtle dialectician, was severely reprimanded by Plato as a mischievous Sophist who, to show his skill, would set out to prove a proposition through convincing arguments and then immediately overthrow them by other arguments equally strong. Zeno maintained, for example, that God (probably conceived by him as simply the world) is neither finite nor infinite, neither in motion nor at rest, neither similar nor dissimilar to any other thing. To the critics of his procedure he appeared to have the absurd intention of denying both of two mutually contradictory propositions. But this accusation does not seem to me to be justified. The first of his propositions I shall consider presently more in detail. As regards the others, if by the word 'God' he meant the universe, he would certainly have to say that it is neither abidingly present in its place, that is, at rest, nor that it changes its place, that is, is in motion; because all places are in the universe, and the universe is not, therefore, itself in any place. Again, if the universe comprehends in itself everything that exists, it cannot be either similar or dissimilar to any other thing, because there is no other thing, nothing outside it, with which it could be compared. If two opposed judgments presuppose an inadmissible condition, then in spite of their opposition, which does not amount to a contradiction strictly so-called, both fall to the ground, inasmuch as the condition, under which alone either of them can be maintained, itself falls.If it be said that all bodies have either a good smell or a smell that is not good, a third case is possible, namely, that a body has no smell at all; and both the conflicting propositions may therefore be false. If, however, I say: all bodies are either good-smelling or not good-smelling (vel suaveolens vel non suaveolens), the two judgments are directly contradictory to one another, and the former only is false, its contradictory opposite, namely, that some bodies are not good-smelling, comprehending those bodies also which have no smell at all.Since, in the previous opposition (per disparata), smell, the contingent condition of the concept of the body, was not removed by the opposed judgment, but remained attached to it, the two judgments were not related as contradictory opposites.If, therefore, we say that the world is either infinite in extension or is not infinite (non est infinitus), and if the former proposition is false, its contradictory opposite, that the world is not infinite, must be true. And I should thus deny the existence of an infinite world, without affirming in its place a finite world. But if we had said that the world is either infinite or finite (non-infinite), both statements might be false. For in that case we should be regarding the world in itself as determined in its magnitude, and in the opposed judgment we do not merely remove the infinitude, and with it perhaps the entire separate existence of the world, but attach a determination to the world, regarded as a thing actually existing in itself. This assertion may, however, likewise be false; the world may not be given as a thing in itself, nor as being in its magnitude either infinite or finite. I beg permission to entitle this kind of opposition dialectical, and that of contradictories analytical. Thus of two dialectically opposed judgments both may be false; for the one is not a mere contradictory of the other, but says something more than is required for a simple contradiction.If we regard the two propositions, that the world is infinite in magnitude and that it is finite in magnitude, as contradictory opposites, we are assuming that the world, the complete series of appearances, is a thing in itself that remains even if I suspend the infinite or the finite regress in the series of its appearances. If, however, I reject this assumption, or rather this accompanying transcendental illusion, and deny that the world is a thing in itself, the contradictory opposition of the two assertions is converted into a merely dialectical opposition. Since the world does not exist in itself, independently of the regressive series of my representations, it exists in itself neither as an infinite whole nor as a finite whole. It exists only in the empirical regress of the series of appearances, and is not to be met with as something in itself. If, then, this series is always conditioned, and therefore can never be given as complete, the world is not an unconditioned whole, and does not exist as such a whole, either of infinite or of finite magnitude.What we have here said of the first cosmological idea, that is, of the absolute totality of magnitude in the [field of] appearance, applies also to all the others. The series of conditions is only to be met with in the regressive synthesis itself, not in the [field of] appearance viewed as a thing given in and by itself, prior to all regress. We must therefore say that the number of parts in a given appearance is in itself neither finite nor infinite. For an appearance is not something existing in itself, and its parts are first given in and through the regress of the decomposing synthesis, a regress which is never given in absolute completeness, either as finite or as infinite. This also holds of the series of subordinated causes, and of the series that proceeds from the conditioned to unconditioned necessary existence. These series can never be regarded as being in themselves in their totality either finite or infinite. Being series of subordinated representations, they exist only in the dynamical regress, and prior to this regress can have no existence in themselves as self-subsistent series of things.Thus the antinomy of pure reason in its cosmological ideas vanishes when it is shown that it is merely dialectical, and that it is a conflict due to an illusion which arises from our applying to appearances that exist only in our representations, and therefore, so far as they form a series, not otherwise than in a successive regress, that idea of absolute totality which holds only as a condition of things in themselves. From this antinomy we can, however, obtain, not indeed a dogmatic, but a critical and doctrinal advantage. It affords indirect proof of the transcendental ideality of appearances — a proof which ought to convince any who may not be satisfied by the direct proof given in the Transcendental Aesthetic. This proof would consist in the following dilemma. If the world is a whole existing in itself, it is either finite or infinite. But both alternatives are false (as shown in the proofs of the antithesis and thesis respectively). It is therefore also false that the world (the sum of all appearances) is a whole existing in itself. From this it then follows that appearances in general are nothing outside our representations — which is just what is meant by their transcendental ideality.This remark is of some importance. It enables us to see that the proofs given in the fourfold antinomy are not merely baseless deceptions. On the supposition that appearances, and the sensible world which comprehends them all, are things in themselves, these proofs are indeed well-grounded. The conflict which results from the propositions thus obtained shows, however, that there is a fallacy in this assumption, and so leads us to the discovery of the true constitution of things, as objects of the senses. While the transcendental dialectic does not by any means favour scepticism, it certainly does favour the sceptical method, which can point to such dialectic as an example of its great services. For when the arguments of reason are allowed to oppose one another in unrestricted freedom, something advantageous, and likely to aid in the correction of our judgments, will always accrue, though it may not be what we set out to find.  Arse Bloody Bugger Cow Crap Damn Ginger Git God Goddam Bint Bitch Bollocks Bullshit Feck Munter Bastard Beaver Beef curtains Bellend Bloodclaat Clunge Cock Dick Dickhead Fanny Flaps Gash Knob Minge Prick Punani Pussy Snatch Twat Cunt Fuck Motherfucker Bonk Shag Slapper Tart Dildo Jizz Ho Prickteaser Rapey Skank Slag Slut Wanker Whore I recommend all things Dragon Age. DA has a very large group of talented erotica writers. Hit up DA on archive of our own and just filter it to only show M and E rated stuff and trust me, the writing is just exquisite. I don't even play Dragon Age, or really give a damn about the characters. However, I will read the fanfiction just because so many of the writers in that fandom are so damn talented. Professional-grade, without a doubt. Of course, there's always going to be a few awful ones, but for the most part, that's like a 1 to 12 ratio. Man, my favorite porn author deleted their entire library recently. I will tell you though that I got my start on Literotica.com. It's a website that's ONLY smut. Like, the stories are only sex stories that's it. But sometimes I go there and search something very specific to read a few examples. They're not good at characters or plot lines but if you're just looking for a classy way to describe a prison three way, go check out Literotica lol Hermione believed the dungeons to be deserted. The air hung chill and silent around her. In the dimness of midnight, with her sight subdued, her other senses were straining, aware of any shift in the air. She thought she could detect nothing. Perhaps it was foolhardiness, or the constant tingle of excitement which pulsed through her, but she chose to ignore the expectant throb which permeated the very fabric of the walls.

She knew where the vial of honeysuckle essence lay. It was on his desk. He'd left it there after the practical that afternoon. If she could sneak two drops – that was all – she would have what she needed to make her sleeping draught and no one would be any the wiser. He wouldn't notice two drops missing ... surely.

The door to the Potions classroom was open. She had scarcely expected it to be, but luck seemed to be with her tonight. Creeping silently through the rows of desks, Hermione inhaled that unique smell of the place. Despite the vitriol she was usually subjected to here, she did adore this room with its intoxicating aromas and seductive mysteries. There was the bottle, just as she'd remembered. She tipped the two drops of the essence into her own vial then turned. She could linger here. She could explore a little. Excitement coursed round her primed limbs now. Despite coming here to find a way to be lulled to sleep, she was wide awake, her mind ardent for experience.

She crept over to a cupboard normally kept locked. Perhaps tonight ...

Her hands reached guiltily for the handle, her heart beating fast and furious.

'Miss Granger.'

Shit. She knew that voice. She froze, unwilling to turn to confirm its source.

'Kindly turn around.'

Slowly, she glanced behind and moved her body round to face her discoverer.

It was no surprise when she looked up into the implacable visage of Severus Snape.

'Have the decency to explain why you are creeping around my classroom in the middle of the night.'

'Umm ...' For once she was lost for words.

A long dark eyebrow cocked. 'I'm waiting.'

'Sir, I ...'

'You are trespassing, Miss Granger. And if my instincts serve me right, as they invariably do, you were about to open that cupboard and help yourself to some rare and possibly dangerous substances, as indeed you have already done by stealing at least two drops of honeysuckle essence from my desk.'

'I just ... needed ... umm ...'

'Your usual inability to shut that infuriating little mouth of yours seems to have deserted you, Miss Granger. This is a very serious matter indeed. Very serious. You will explain yourself.'

She sighed. Honesty seemed the best policy. 'I couldn't sleep. I knew you had honeysuckle essence on your desk; I'd seen it earlier. I couldn't sleep and it's the main ingredient in a sleeping draught.'

'You do not need to tell me that, Miss Granger. I am a Potions Master.'

'No, of course. I just ... I thought I'd make myself one.'

'Did you indeed?'

'Yes.'

'I suppose you believe you were being resourceful. How very predictable. Unfortunately for you ... I caught you.'

She swallowed hard. Why was she not afraid? She was certainly alert, every nerve ending tingling, but it was with anticipation rather than dread that she stood before him.

'I'm sorry, sir,' she said clearly. 'It won't happen again.'

'I should think not.'

Hermione turned away, as if she would leave, but Snape, with a swift, fluid movement which startled her in its almost admirable elegance, darted round in front of her and blocked her path by leaning his arm against the wall.

'Oh no. I don't think so.'

'You don't think what?'

'You are not getting away with such a blatant flouting of the school rules.'

Hermione eyed him steadily, enjoying the dark liquidity of his eyes. She bit her lip and spoke, yet her voice did not emerge with insistent determination, but with a slight lilt of flirtation, she knew it. 'Sir ... I'm leaving in a few weeks. I'll be twenty in three months. Haven't I gone beyond schoolgirl protocol?'

'Are you trying to imply you are somehow exempt from punishment, Miss Granger? What a remarkably presumptuous and arrogant little madam you are.'

Being called a little madam by Severus Snape sent a surprising and oddly pleasing coil of passionate disdain through her. There was a powerful aroma in the air, rather luxurious she thought; she'd never smelt it in such close proximity before. It was him. Now, instead of deferring to him, she crossed her arms, took a step in, glared defiantly and opened her mouth to speak. But before she could utter a syllable, she was cut off.

'Trouble, Severus?'

Hermione turned behind her. 'Oh my god,' she said aloud with a moan of disbelief. Stepping towards her out of the shadows was the tall, superior figure of Lucius Malfoy.

'Not exactly, Miss Granger, but thank you for the thought nonetheless,' he smirked deeply.

She had forgotten that Malfoy was visiting. In the aftermath of the war, after his extraordinary and thoroughly undeserved exoneration (according to Hermione) he had been over-zealous in confirming his standing as Thoroughly Upstanding Pillar of the Community by throwing copious amounts of money at any venture which would gain him maximum publicity. This time it was Hogwarts; he had just dished out several thousand for an extension to the library and had come up for the opening. Hermione hated to admit that the extension was much needed and that she personally adored the new space.

'Hang on,' she huffed. 'I could equally ask you two - why are you skulking around after dark in a classroom?'

'This is my classroom, you insolent fool. And I have been brewing,' came Snape's immediate and smooth riposte.

'With him?' she asked disdainfully, throwing her head back to indicate Malfoy contemptuously.

'Kindly have the decency to refer to me by name, Miss Granger.'

'I'd rather not.'

'Tut tut tut ... quite the temper,' drawled the blond wizard with more than a hint of amusement.

'Mr Malfoy is a highly skilled Potion maker,' intoned Snape.

'I bet he is,' she scoffed with heavy sarcasm.

'So cynical, Miss Granger. I would advise you to adopt a more kind-hearted approach to your fellow wizards,' continued Malfoy.

'Fellow? I didn't think you considered me anywhere near a fellow.'

'Time changes us all ... Miss Granger.' Malfoy was standing directly in front of her. His eyes swept down her body in one long grey pass, down then up to lock directly back into hers. They flashed as a smile curled sweetly but wickedly over his lips.

'Severus ...' He addressed his friend without once taking his eyes from hers. '... what is usually done with miscreants, trespassers and thieves?'

Snape took a step into her. She smelt his heady aroma more powerfully than ever. 'In this case, I believe Miss Granger needs something targeted very specifically and ... personally.'

They were both standing on either side of her now, leaning one hand each on the wall on either side, their bodies blocking her escape route. Both were dressed in their familiar black, both smelt so, so ... good. And both were so bloody tall and ... hard and ... firm.

Hermione closed her eyes. Fuck. Don't think. Just don't think. But it was too late. She swallowed hard, trying to deaden the lust which had been stirring since Snape had first found her.

As much as she hated both these men, she couldn't pretend they weren't at this moment, as she stood trapped in the still dark quietude of a deserted classroom, ridiculously desirable. She cursed her treacherous body, prickling already, growing heavy with lust, crying out to be touched.

'I have to go,' she stated, trying to convince herself as much as them.

'I think you'll find you do not.' It was Snape's low, deliciously rich tones which sounded. As much as it was impossible to believe, there was no doubting they were thinking the same as her.

Her needs had become acute and extreme after the war, and now she doubted very much she would resist whatever was on offer. But a little resistance never did anyone any harm. She fixed her eyes into Snape's.

'Let me go.'

'You don't really think you can get away with it so easily, do you?' demurred the deep honeyed voice of her teacher.

'I think she does, Severus. I don't think she is in the slightest bit contrite or humble.' Malfoy's voice was not as deep nor as smooth, but his tight crisp words ignited her just as much.

They were both moving closer. She forced her hands behind her back to stop from grabbing them and pulling them into her.

'Miss Granger.' Malfoy had raised a finger and drew it slowly down the side of her cheek with deliberate and sensual languor. 'You really must realise that you cannot possibly defy us, two people whom you know are capable of such ... powerful magic ...'

'Dark magic ...' she corrected, finding the words turned her on more than knocked sense into her.

Malfoy cocked an eyebrow. 'At times it has been necessary.'

'We don't discuss such things. You know that, Miss Granger.'

Her Potions Master's hand had risen and had stopped just below her chin, tilting it up a little, making her eyes half close to look at him. She drew in her breath steadily through her nose.

And then the hand at her chin dropped and with nimble fingers began to undo the buttons of her shirt. The other hand had dragged over to her mouth and his thumb was tracing over her bottom lip. It was warm and firm, remarkably smooth. She wanted to suck it into her, but with supreme force resisted.

'Stop it.' Her voice lacked any insistence.

'Oh, you know you don't mean that,' mused Malfoy. No, she didn't.

Snape's fingers had by now undone three of her buttons. Despite her sexual experience, even she felt herself flushing red. She hadn't worn a bra today.

'You can't do this,' she tried again, enjoying the languorous little game more than anything.

'I'll think you'll find we can,' intoned Snape.

'And we will,' confirmed Malfoy.

'And what is more, you know full well it is exactly what you want.'

She did, but she didn't want to give them the satisfaction of thinking she would capitulate that easily. She made a move as if to try and escape. But almost immediately the strong hands of Malfoy had gripped both her arms. He moved swiftly behind her and pulled her back against him as he braced himself on the wall.

'A little restraint is needed, it would seem. Apparently, the little lioness does fight back after all.'

Malfoy pulled her arms tight behind her. Hermione did struggle now, noting how her desire rose with her resistance. Snape continued unbuttoning her shirt and soon she felt the cool air waft over her exposed breasts as the material fluttered back.

A voice breathed soft and succulent in her ear, 'Now, my little Gryffindor wildcat, if you promise to keep your claws in, we promise to make it worth your while.'

'Oh, I'm not entirely sure she needs to keep her claws in, Lucius. A little resistance may prove ... interesting.'

Hermione locked eyes with her professor. His hands came up and cupped her breasts, surprisingly tenderly. Then long fingers grazed the nipples. She instinctively pushed towards them and heard a moan escape softly. Malfoy gripped her yet tighter.

But she saw the dark head of her professor lower itself, and then the sweetest sensation – his lips, those dark red lips she had seen hounding her so often, closed around her right nipple and sucked. Hermione stared down. His tongue flitted and darted over the flesh which puckered and swelled for him. Gods, it was so fucking good. Sharp pin-pricks of sweet sensation darted through her from the tightening nipples to her heated core, centred on her clit which she could almost feel swelling with desperate need.

Again, the voice hissed in her ear, 'You like that, don't you? You've wanted that for far too long ... longer than a good little Gryffindor should ever really admit to, haven't you?'

She didn't answer. Then Snape moved to her other nipple and sucked it so hard into his mouth her breast was dragged out.

'Haven't you?' urged Malfoy.

'Yes,' she hissed, staring down at the dirty, gorgeous sight of her breast tugged in her teacher's mouth, of his tongue playing with her tit, of his hungry lips feasting on her, and etching it onto her mind with pure happiness.

For a time she simply delighted in the sensation of tingling pleasure rippling through her from the tight buds being licked and nipped and sucked by her professor while the hot breath of one of her most hated adversaries floated in regular clouds about her head and her body was held back against his tight, honed torso. At one point Hermione pushed back and felt herself jolting against his groin. There was no denying his own arousal, his erection prodded against her urgently, but Malfoy pulled back. 'Now, now. Not so fast. One thing at a time.'

And with that Snape pulled his mouth from the nipple which had been nestled within it. The tight flesh was by now so red and distended it almost looked painful, but Hermione immediately missed the tugging pull of his lips. She groaned. Snape rose up and held her chin fast in his hand again. 'You are quite a revelation, Miss Granger. You really do have the most delicious little tits I've ever encountered. And judging by your reaction, you enjoyed that as much as I did. Tell me, Lucius, have you ever seen such desperate tight nipples? Look at them, like little cherries just waiting to be savoured.' He suddenly gripped her two nipples in long fingers and squeezed hard. The sharpest pleasure pain surged through her and she cried out brilliantly. Her thighs ran wet with need. Malfoy chuckled in her ear.

Snape leaned in now, his hands moving with feathery grazes up her legs, slowly up, drawing ever closer to the place she was longing for touch. She squirmed, willing him higher. Snape allowed himself a casual smirk at his friend before turning his attention back to his student. 'And now, I think a little more discovery is called for, don't you?'

Hermione had to bite her lip to prevent herself screaming 'Yes' so loudly her lungs burned.

'What was that, Miss Granger? Does that sound like a welcome offer?' mused Malfoy. 'Are you telling me you want your professor, your teacher, to suck on your needy little pussy? Tut tut. You are an eye-opener. Let's open those lovely legs of yours then, shall we?'

Malfoy reached down and Hermione felt strong fingers curl around her thigh. He tugged and she followed, moving her legs apart instantly. The fingers explored up now, and one hot tip found her clit immediately, masked from him only by the thin lace of her underwear. She bucked against it with a grunt of need. Malfoy quickly slid the finger up, relinquishing the pressure on her clit but immediately he slipped it down into the band of her knickers and further down, past her clit, but gliding easily through the dripping lust which was pooling.

'Oh yes, Severus. You can drink your fill. What a hungry slut we've found. Her desire is positively pouring from her.'

'A pretty little pussy,' drawled Snape.

'Such a wit, isn't he, little Gryffindor?' chimed in Malfoy. 'Or should that be Gryffin-whore?'

Hermione dismissed his taunt, only able to stare down at the dark head hovering a mere inch from her cunt. With agile and strong fingers, Snape ripped her underwear clean off with a loud tear, tossing the shredded material dismissively to the side. She bucked towards him, never before so desperate to have tongue and lips on her. Hands encircled her again and pulled her back. Soft words hissed into her ear. 'Wait. You are in our hands now and you will do well to remember it.'

Hermione almost sobbed. Then those same hands were at her breasts, smoothing over them. Fingers flicked the nipples, so hard she almost screamed with sensation, not pain, but sheer beauty of touch. 'Please!'

Lucius chuckled and Severus grinned up. 'What do you think, Lucius? Should we teach her a little patience or let her sing for us?'

'I leave that entirely up to you. Can you hear her? Her lust is evident up here; she can barely breathe, let alone speak – sighs and moans – music to my ears.'

Hermione was still staring down at the head. And then, almost when she had given up on him, Snape moved forward. She caught the flash of his tongue and the most perfect sensation of focused wet warmth encircled her ravenous clit. She cried out, a long cry of fulfilment. At the same time, Lucius' fingers had found her nipples and pinched hard. Rapture. She pressed herself as much as she could onto the tongue and lips and teeth and hands now focused so perfectly on her.

'There we are. What an expressive body it is. You were right, Severus, you suspected as much. Why we have waited so long is a mystery to me. How responsive, how receptive, how delectably teachable. How does she taste?'

'Just as I had imagined. And she is pouring onto me. Merlin I can't stop ...' He slurred his last words, plunging back to devour her, his tongue thrust hard up into her pussy before licking forcefully back to her clit. Hermione strained onto him with a throbbing moan.

'Now, my sweet slut,' purred Malfoy, 'reach around and hold me.'

Hermione immediately fumbled behind with her hands, and quickly released the buttons keeping Malfoy's cock from her. She leaned forward a little, propelling her pussy deeper against Snape's mouth conveniently at the same time, and wrapped her hand around the thick, long, hard flesh she had discovered. A low sigh of hot satisfaction poured into her.

'My balls, hold them, hard, I want that, and push back against me.'

Hermione was enjoying exploring the length of Malfoy's cock too much, but reached down and found the heavy sac. She wrapped her fingers tenderly but firmly around it and felt another hiss of pleasure. Malfoy began a rhythmic nudging against her, up and down, rubbing the underlength of his cock along the small of her back. His hands remained tightly affixed to her nipples. He was squeezing and twisting them now, although neither was fully aware; it registered merely as perfect sensation, combined with the focused wet bliss Snape was lavishing on her clit and pussy. Her teacher by now was furthering his efforts with his fingers. And when Hermione felt two slip deep up into her and tap instantly on her primed g-spot she almost came. But then even more. One hand had slipped from her breast, she heard the man behind her spit down on something, and then a long, strong digit was pushing into her arse. She had long learnt to welcome anything questing into her there, and now more than ever she moaned with rapture.

'How easy that was, my little hussy? Let's see what more we can do, shall we?'

This time she felt the slight sting of resistance. But at that moment Snape took her clit fully in his mouth as his long fingers quested deep up into her cunt. Her body melted with bliss. Malfoy took the opportunity to squeeze another finger into the tight ring of her arse next to the first. He moved them, scissoring and screwing them into her.

'I can feel him. I can feel his fingers fucking you,' came the hot hiss in her ear. Hermione turned her head, searching for Malfoy's mouth. He rewarded her by giving her his tongue and lips, but only for a moment before pulling back. 'I think perhaps a little treat, Severus, don't you?'

Snape merely moaned, unwilling to remove himself from the dripping of her cunt to speak. He managed to drag himself away briefly. 'Come, girl, come now.'

And he was back. His fingers plied, and the flat of his tongue dragged wet and long over her, ending with her clit being pulled hard into his mouth. The addition of the sweet scrape of teeth and the pulse of fingers deep in her cunt and arse sent her shattering over the edge. Lucius held her rigid as orgasm ripped through her, wave upon wave of pleasure feeding off the fingers and tongue of man within her. Her head was flung back and she cried out, her eyes squeezed shut.

Snape slumped back at last, panting deeply, his eyes closed, his mouth glistening.

'There we are, my dear,' chuckled Malfoy. 'It is not only you that has been rendered incapable. Now ... the advantage of working for the Dark Lord for many years taught me to be infinitely patient. You and Severus have such a long and illustrious history. I think he deserves to bring that relationship to fruition, don't you?'

'I want ... I want ...' She could barely speak, all she wanted was for this to continue and to feel them around her and in her.

'I know what you want.' She opened her eyes. Malfoy was holding her head to meet the gaze of Snape, who had stood, newly invigorated. He had removed his outer robes and was unbuttoning his coat with remarkable ease. He stepped up to her now, his dark eyes fixed with familiar coldness into her. This time it merely inflamed her more. His words came hot and fast as he swiftly pulled off his clothes. 'Do you know how long I've thought of this, you self-righteous, opinionated hellcat? How much I've wanted to bury myself in you?' He had undone his trousers now and pushed them off. Hermione could only stare between his legs where his cock rose up, thick and long. Malfoy, still behind her, suddenly yanked off her skirt and then gripped strong under her thighs and lifted, pulling her legs from under her, bracing himself against the wall and holding her against him, her legs splayed and bent. She instinctively curled her arms up behind her and around his neck to support herself more. He held her legs apart for Snape to plunge straight in.

Hermione could only moan. Words had been lost as her body craved cock.

'Take her, Severus,' dictated Malfoy. 'She is ripe for the plucking.'

Snape stepped forward. She locked her eyes into his black ones and moved her lips. 'Fuck me.' The words were barely audible, but Snape needed nothing more. Placing himself between the legs spread so carefully for him by Malfoy, he held onto the plump cheeks of her arse and pushed hard up into her.

Hermione was staggered. She had never had such a feeling of immediate fullness. The position and his size and length made her sway with sensation and she lost her hold on Malfoy's neck to instead grip hard onto her teacher's shoulders. For his part, Snape remained silent, save for a low groan, detectable only to Hermione, as was the flaring of his nostrils, which widened in time with the desperate breaths being dragged in through his nose.

He stroked slowly at first, watching carefully as his cock slid out long and slick from her cunt, before pushing full back in, sliding through the wetness of her lips.

'Fuck her hard, Severus, she needs it, I can tell. I'll leave her to you.' With that, Malfoy carefully moved out from behind Hermione as Snape moved forward, pushing her back to the wall.

He lifted both her legs high round his hips. Bracing her against the cold stone, he started to move powerfully, stroking remarkably long and deep in and out. Malfoy stood a little way off, surveying the scene with almost casual curiosity. Snape stared into her the entire time, his dark eyes still burning even in the murky light of the room.

'Fuck, you have the most exquisite cunt. I've wanted it, girl. I've wanted to eat it and taste it and fuck it, fuck it hard and deep and long, with my mouth and my hands and my cock. And you do not disappoint, you Gryffindor slut. Squeeze it, squeeze me. Yes, that's the way. Fuck, but you're good. Where did you learn to be such a perfect little fuck? Hey?' His words, foul-mouthed and coarse, were still delivered in that low, smooth, velvet voice, directed entirely for her, only for her. They enthralled her as much as the smooth rhythm of his cock ploughing steadily in and out of her rapt body.

'Don't stop talking to me, sir.'

'Sir? Do you like that, you dirty little whore? Do you like the thought of your teacher fucking you senseless while one of your bitterest enemies looks on?'

'Yes, yes, I fucking love it, sir.'

'Look at him, look at him.'

She turned her head to Lucius Malfoy leaning against the wall, watching as she was taken hard against it. Just then the blond man moved into her and reached up a hand to stroke along her cheek. His thumb brushed along her lower lip and Hermione opened her mouth, letting it delve into her. She pulled in her lips around it and sucked avidly. Lucius let her for a time before leaning in and kissing her, hot and hard, forcing his tongue in to taste and explore all she had to offer.

All the while, Snape continued plunging along her. They had built up a steady rhythm and now Lucius simply entered into that.

'Let him come. Let him come into you, you beautiful creature. He wants it; he's wanted it for so long.'

She turned her head back to Snape and locked eyes with him. He continued moving, urgently now, and then he froze suddenly, his face creased as if in revelation, and she knew he was coming. He was coming so powerfully that his grip on her backside clawed. And at last he made a sound, a low guttural moan which reverberated through him as he burst up hot and fast into her.

Snape at last stopped and pulled out of her slowly and she felt her knees give way. As he stepped away, she slumped to the floor.

Malfoy chuckled, but was ridding himself quickly of his clothes. Hermione stared at him, her lust still brimming.

'Quite the knee-trembler ... as I believe they say. Wouldn't you agree, Miss Granger?'

She stared up at him, her eyes glazed, unable to speak.

'There we are, Severus, you've done it again, left your pupil speechless. Now ... after that, Miss Granger, I think you need to lie down.'

Malfoy sauntered over to her and held out his hand. Hermione took it immediately and allowed herself to be pulled to her feet, swaying blearily and falling against him. She turned her head up to his mouth for a kiss and was rewarded. 'Circe, you are addictive. You didn't come then, did you? Dear oh dear ... what must you think of us. Never fear, you sweet creature, let's sort that now, shall we?'

Hermione was being pulled towards the large preparation table in the middle of the room. Malfoy, still holding her, lay down on it with his cock large and erect, rising up powerfully. Immediately she wanted it. She knew what to do and climbed onto the table alongside him. But as she moved to straddle him, he grabbed her round the ribs and turned her around so she was facing away from him. 'Move around.'

Hermione knelt on the table, poised just above the leaking tip of his cock. His large hands ran from her hips up the dip of her waist to reach around and hold her breasts. Slowly and deliciously she sank down onto him. Immediately, in this position, his cock hit her perfectly and stretched her as much as Snape's had done. She lowered herself fully and released a moan which signalled her delirium.

'Fuck, that is phenomenal.' It wasn't often that Lucius Malfoy was overcome, but as the hot sweet walls of the Gryffindor's cunt clenched around his cock, he groaned out with pleasure. She started to ride him steadily and then she felt his hands clutching her breasts and pulling her down to lie flush against him. His legs extended off the edge of the table, as did hers. Malfoy continued to move inside her, his thick cockhead pressing perfectly against her g-spot. Instinctively she reached down to find her clit and increase her pleasure yet more, but she found her arms pinned to her sides by his stronger ones as they reached around to hold her and grip her breasts.

Hermione opened her eyes blearily to see Severus Snape staring across at her, watching intently as his friend's cock stretched up into her time and again. She arched her back to feel it even more and heard Malfoy hiss soft and dangerous in her ear.

'Do you like him watching as I fuck you? You adore it, don't you, little whore? How much Death Eater cock can you take, slut? Oh, we'll give and give, believe me. But he doesn't have to look on, does he? What do you want now? Do you want his tongue on you again? Do you want Severus to lick your needy little clit while I fuck your cunt?'

'Yes, yes.'

Malfoy moaned into her ear. 'Perfect tits, perfect cunt, perfect mind. And now I'm in you, the father of your worst enemy, a man who tried to destroy you. I'm in you. I'm in all of you. And you adore it. You live for it, don't you?'

'I love it. I love it so much.'

'Open your eyes. Look at him.'

She tore them open to see Snape kneeling before her. He had simply been watching as his friend pistoned regularly in and out of his pupil, but now, the sight of her swollen clit sitting perched above the stretched and filled opening of her cunt was too tempting. He brought down his head and attached his mouth to the red nub of flesh.

Hermione's eyes rolled back in her head. She forced herself not to come immediately, but it was almost impossible. Her cunt was being fucked so perfectly, the angle forcing the head of Malfoy's cock into her g-spot and now more: Snape's mouth, Snape's lips and tongue licking and sucking. Tears formed in her eyes as feeling and sensation overwhelmed her.

'Relax,' she heard hissed into her. 'Let us guide you. Don't rush it.' Malfoy slowed his strokes, simply filling her with cock without fucking too harshly. He'd rock occasionally and Snape would move with him, never relinquishing her clit from his mouth. And then Malfoy's hands came to her tits. He held them, flitting and flicking over them, squeezing hard occasionally so that there was a rise and fall in the intensity of sensation.

And then she was coming. Snape had sucked so perfectly that it was unavoidable. She came hard on Malfoy's cock with a rising wail, her body taut with rapture, and knew he had given in. He shook under her, groaning out his pleasure as his cock released hard and fast up into her. 'Fuck! Coming! Fucking good, fucking good.'

The words pouring incessantly out of the refined pureblood's mouth brought another rush of pleasure through Hermione, dragging her orgasm out more.

When at last she steadied, she lay back, hot and heavy across Malfoy who draped an arm around her.

For a time she was aware of him remaining there, content, as was she, as if he had lived in her arms for many years as lover. But then he slipped from her and she turned. In the dim recesses of her mind she was aware that the table top had grown more comfortable, presumably by magic, and a soft velvet blanket, warm and comforting had been placed over her. She allowed her eyes to close and her mind to blur into sleep for a while.

When she awoke, she was not surprised to find herself still in the Potions classroom but she was surprised to find Severus Snape and Lucius Malfoy still there, sitting quietly on chairs, staring over at her.

Hermione sat up, at last a little self-conscious. 'I ...' she started, unable to continue.

'Do finish your sentences, Miss Granger,' demanded Snape.

'I should ...' Slipping off the table, she bent to pick up some of her clothes scattered around. 'I really should go.' Hermione turned towards the door. But immediately Malfoy had stepped before her, blocking her path.

'Oh no. We're not quite finished, Miss Granger. You know that. One must always finish what one starts.'

She glanced up at him, almost fearful. Her cunt was tender from their inhabitation of her, her legs still weak from the fucking against the wall. 'No more ... you can't ... I can't ...' But she knew she didn't mean it. She would stay, but once again she wanted to prolong the game, and decided to play with the concept of defiance a little longer.

'Yes, you can.' Snape knew her better than she knew herself. 'And so can we.'

'Bend over the table again, Miss Granger,' demanded Malfoy.

'Why?' she eyed him curiously.

'Do as he says, Miss Granger.'

'Tell me why.' She enjoyed resisting them and her voice had gained a defiant edge which she knew would enthral them.

'You'll find out soon enough.'

But staring boldly at them both, Hermione still had no hesitation in doing what they asked. Gripping the table hard, she flattened her body across it and shifted her legs apart, half-guessing what was to come.

'That's the way. Was she always as obedient as this in class, Severus?'

'Miss Granger was eager to please on the face of it, but had an annoyingly insubordinate streak which lurked just beneath the surface.'

'Would you agree with that? Are you insubordinate, Miss Granger?'

'Perhaps.'

'You know what happens to disobedient little sluts, don't you?'

Malfoy was behind her now, running a finger slyly around her tight little arsehole. She squirmed back to feel more of the delicious tickle.

He spat down onto his fingers. 'Something like ... this.'

With that, he pushed two fingers hard up into her. Hermione ground back onto them with a grunt of pleasured surprise.

'Too easy, girl. In which case ...'

His fingers were removed. Hermione heard a noise. He was applying a substance to himself.

'Let's try this.' She knew instantly what was happening. Malfoy pressed forward, squeezing the head of his cock carefully but insistently into her arse.

Hermione bit her lip and stared straight ahead. Snape had moved to stand before her and she met his eyes.

There was resistance, but she focused on the feeling of long hard cock as it squeezed deeper into her, willing it past any tension. She longed for it. Locking eyes with Snape, she exhaled slowly and at that Malfoy pushed hard past her tightness to lodge himself deep inside her.

'Hell take us, she's incredible,' hissed Malfoy. He pushed in again, prompting her to groan with pleasured pain.

Snape continued to stare down at her almost casually, studying every shift in her features.

'Move.' She had said it but barely recognised her own voice.

'Oh, have no fear, my dear, I intend to.'

Malfoy pulled out, causing her to grimace as sensation tore through her. But it was a grimace of sheer feeling. Soon enough he pushed hard back in again, deeper than before, and before long he was fucking her arse with considered and ardent strokes.

'Well, Severus, I believe it is time.'

And with that, in a move which shocked and initially flooded her with remorse, Malfoy pulled out of Hermione and dragged her up from the table. She gasped at the sudden loss of him from within her.

But before she knew it more hands held her. Snape had gripped her hard and held her tight with one hand round her waist and the other coming to brush her hair back from her face as he breathed deep and low into her ear. 'Who would have thought my most tormenting little pupil would be such a perfect fuck? You can take us all because you have been through it all, like us. You need the pain as much as the pleasure, don't you? I know all about that. Pain. Living with it. Learning to feed off, to let it nurture you as there is nothing else. So does he. And so do you. As much as you want to pretend otherwise. Pretend that you live the perfect life and will go off and get the perfect job and the perfect husband, you are just like us: ruined by agony and shaped by pain. You know we need it. Sometimes it's the only rock we have to cling to. We know we all need it. Share it now, Hermione. Share it with us.'

He turned her round and pressed her hard against the wall, grabbing her leg quickly and pushing himself hard and fast up into her cunt. She sank down onto him swiftly, feeling that now familiar pang as his long cock nudged up into her.

Snape moved gracefully at first and she started to lose herself in the moment, feeling pleasure rising within her. But then he gripped her rump hard and lifted her. She instinctively wrapped her legs around his waist, but then he turned, pressing himself against the wall and moving her back out into the room.

And then there was more. The cool air on her back was replaced by flesh, warm, solid flesh, muscles and smooth, pale skin. And there it was. The pressing of that cock again against her arse. Malfoy purred into her ear. 'In, Hermione. Into you.'

She turned her head and found his mouth and as they kissed his cock edged its way further into her arse, pressing in next to the other cock separated only by that thin membrane. Her eyes darted open and she lost the kiss as she felt more and more of him squeezing into her.

She was supported entirely on the cocks and hands of the two men. The two men held her up with ease. She held onto Severus' shoulders while her head fell back onto Lucius'. And then they moved her. She was held fast upon them, upon the rolling rock of their manhood as they stroked and filled and fucked her like nothing before. And she clung to that rock of pleasure and perfect pain. She felt herself stretched, not to a point at which the sensation took her from the swell of rapture capturing her body, but just enough to reinforce the paradox of the situation. They had their hellcat now and she was purring ceaselessly for them.

'I can feel him. I can feel him inside you. Do you like that? Two, Hermione. Two of us.'

'Nothing else. Want nothing else. Harder, please, move harder.'

And she leaned forward and plunged her mouth down onto Severus just as he pushed deep up into her again. There was a moan from the man behind her as their cocks were rammed up into her. She swallowed back her delicious surprise amidst the penetrating kiss she was giving him.

Despite the awkwardness of the position the strength of the two men supported her easily and now they lifted her, easily stroking the full length of their rigid cocks hard and deep into her time and time again.

They ceased talking and their bodies moved in perfect synchronicity, rising and falling into her. Amongst the fullness inside, her clit was rubbing along Severus and Hermione felt another climax rising unstoppably again. She moaned loud and let her head fall back against Malfoy. His hands were gripping her breasts, plying the nipples again.

Severus leaned into her and kissed deep and hard, then her head was turned for Malfoy, the rhythm of their tongues in harmony with the rhythm of their cocks.

They were so ready, their cocks fit to burst, but they waited, waited until she came on them. And when she did, Hermione forgot who she was. She was made for these two men, for the cocks filling and completing her. She came so hard her ankles shook and her fingers clawed. She came so hard that when she opened her mouth to cry out no sound could emerge. She was pleasure. And the orgasm raged on, tearing through muscles and tendons, flexing itself in glory.

'Do you feel that? Do you feel that?' moaned Malfoy, in awe of her body.

'Now. Now!' demanded Snape.

And they came together, forcing their cocks deep into her. Their come exploded hot and fast, shooting into her. The sound of the two men climaxing at the same time registered with Hermione: that low guttural baritone roar of pleasure, mingling and mixing. Dark and light. She clung to it as much as she clung to their bodies.

Their bodies and cocks continued to twitch as sensation worked its way out of them. It was some time before anyone could move or even focus.

At last, Lucius softened enough to pull out, so tenderly she almost wept. She immediately felt his seed trickle from her, warm and thick. Severus, still inside her, walked back to the table and laid her gently upon it before drawing back.

Hermione closed her eyes and sobbed as her body was left vacant again. She clung to the sensation of that warm seep of seed, clenching her thighs shut to hold it within her. But warm hands pushed her legs apart and she pulled her eyes open to see the two men staring between her legs in wonder as the milky whiteness of their ecstasy, which had filled her time and time again, leaked from her to trickle onto her damp skin.

Minutes passed in near silence. The atmosphere pervading the room was thick with spent sex, but nobody recoiled from it, even as their desire diminished.

'Do you think Miss Granger has learnt her lesson, Severus?'

Hermione's eyes flickered open as she registered the smooth tones of Lucius once again.

'For now,' came the low response. 'However ...' Severus moved to gaze down at her. He lifted a hand and stroked a damp curl of hair from her face. 'I think perhaps this is a lesson from which we have all benefitted.'

Now Lucius was on her other side, stroking along her side with one finger, tracing over her still panting breasts. 'On that I agree entirely. In that case ... we should all repeat it at some point.' He bent down and whispered in her ear. 'What do you say, you beautiful thing? Will you take us again? Will you please us and work us and fuck us as perfectly as you did tonight? Will you take our cocks deep and hard inside your mouth and your arse and your cunt time and time again and let us make you come so often and so powerfully you forget all that has passed? What do you say ... Hermione?'

When the Death Eater said her name, it was the sweetest and most honest sound she could imagine. She reached up a hand, curled it round his neck and pulled him down to her, kissing him with affirming passion. 'Yes, yes ... again and again and again, Lucius.'

It was Severus' turn to move her to him and she kissed him with equal conviction. 'You understand too well, don't you, Hermione? And together we will continue.'

'Do I have to go back to my room?' She had a hand on each of them, not wanting to let them go.

Neither answered, but amidst kisses and caresses she was lifted off the table and carried through to rooms off the classroom where she was placed on a bed. The two men came to lie beside her and together, entwined about her, they fell asleep.

In the morning, Hermione woke before the others and looked from one to the other with a smile. Her body was tender, but through the tenderness pulsed an unremitting need which she knew would remain undiminished. It may be with the two of the unlikeliest men she could have predicted, but it was the start of a long and beautiful friendship.Victoria was enraged.

She knew this was a futile emotion, but her anger coursed through her with such white fury that she practically flew down the corridor between the throne room and her bedchamber.

How dare they?

How dare they?

Her Privy Council were a vile assortment of gout-ridden leeches who pandered to her when it aided their own advancement and treated her with the disdain of an infant when she questioned them.

If she wished to propose a law to aid families in need, why should she not? But they had sneered and mocked and chuckled at her 'idealistic' vision.

And then there was her husband. She had gone to him afterwards and he had sniggered. Not laughed, not chuckled, but sniggered. At her!

The insolent arrogance of the man! He supported her bill, but was as disdainful as her councillors of her passionate determination to act independently.

Oh, how she wished …!

She paced through the halls, wringing her hands, not sure where to go or what to do with herself.

And it was all made so much worse because he wasn't there. Lord M. In Parliament. Again.

She hated him at that moment. He had said he would be at the session but had not appeared. She needed him. And he had failed her.

Her anger surged again and she let out a cry of fury as she turned a corner.

And ran straight into someone.

'Oh!'

She knew him by his clothes and his scent before she could even turn her eyes up to look into his face.

'Ma'am!' exclaimed Lord Melbourne. 'Are you alright?'

She stepped back (not too far, because he did, after all, smell so very good). 'Alright? Alright? No! No, I am not alright, Lord Melbourne! I have had the most frustrating session with the Privy Council and … you were not there!'

'No, Ma'am, for that I apologise.'

'It is not good enough!'

'I had very important matters to attend to in the House, Ma'am.'

'Oh, always you say this! Matters more important than me?'

'Ma'am …' he cautioned, his lips pursed and his eyes bright with warning.

She was undeterred. 'You have let me down, Lord M.'

'I can only apologise, Ma'am, but you must realise that one Privy Council meeting may not be as important as avoiding diplomatic incidents.' His voice contained an edge of unassuming authority.

She huffed. 'I was trying to propose a new bill, the one we discussed. They … they laughed!'

'Well, you must recall that they are mostly fools.'

'And so did Albert.'

'Ah.'

'He is appalling at times. I cannot abide it. And as for the Council, you keep them in line. I wished you to be there! I needed you!'

'Ma'am, you do not need me always, in any case, we will put it right at the next meeting.'

She wrung her hands in despair. 'Oh, it may be too late then! I hate their control of me. I hate their influence. I hate … I hate them all!'

'Even Albert?'

She glanced at him in surprise and he quirked an eyebrow and held her gaze.

'Well, no, no, of course not. I am married to Albert in all ways … and yet … he can be so very … frustrating.'

'No marriage is without obstacles, Ma'am.'

'I realise this all too well, Lord M!'

He took a pause, and placed his hands behind his back.

'Ma'am … you have allowed yourself to become most impassioned.'

She turned to him, her eyes alight. 'And why not? Why should I not become impassioned? I feel these things, you know I do!'

'Oh, I do.' He almost smirked, and his eyes dropped briefly to take in the rise of her breasts. She blushed but did not shy away from it.

'Lord M!' She moved in again, her instincts demanding it. Her belly writhed, her temper making her feel things she knew she should not but had no way of controlling. 'Sometimes I feel things so strongly I do not know what to do with myself.'

He looked down at her, his nostrils flaring.

'Do you not?'

She shook her head. 'No. It is like I have a wild beast raging inside me. My ladies are useless, Albert only make it worse with his controlling tedium. Sometimes I feel so desperately, desperately constricted.'

He studied her, his eyes casting over her face almost with amusement.

'Oh, do not look at me like that! Do you mock me?'

'Not at all, Ma'am. That is the last thing on my mind.'

'Do you understand my frustration? Do you understand my need?'

'I think perhaps I do, Ma'am.'

'Yes,' she said, her desperation making her voice rough. She nearly flung herself against him there and then. 'You do, you do!'

'This wild beast you speak of must not be allowed to eat away at you. You must seek a way to release it.'

'Release it? Lord M, yes, yes, I know this. But I … I do not know how!'

He stood looking down at her for a time and that all too familiar gleam of attraction rose up so hard between them she thought she may take hold of him immediately. Oh, it had never really dulled. Despite marriage, despite two children, still she adored him, still she wanted him, more than ever now that she had known fleshly pleasure.

She stared up into him and said, 'Lord M …' That was all.

His eyes were bright with an intent she had not previously noticed. She noticed it now. 'Then …,' he said, his voice rich and low, 'if you do not know what to do with yourself … perhaps someone should do it for you.'

'Perhaps they should.' She stepped in again. She wanted to touch him so much it hurt more than ever. 'Lord Melbourne … will you do that for me?'

'Do what, Ma'am?'

'I do not know. But I trust that you do.'

He stared down, his chest rising and falling faster than his calm expression conveyed.

'Are you sure? Are you so very sure?'

She took a moment to consider. 'Yes.'

'For you know I can indeed do that for you.'

'I have suspected as much. I have … wondered.'

He swallowed and his Adam's apple jerked along his neck before settling.

'Ma'am …'

'Please … please. You know … you alone know.'

He stared down at her, his expression conflicted, but she parted her lips slightly and let her tongue dampen them briefly and did not allow her eyes to move from his.

He swallowed hard and then said, 'Visit me at Brocket Hall.'

'When?'

'We will contrive a reason. I will complain of a headache and say I am unfit to travel but that we must continue business.'

'When, oh when? Soon, please, soon.'

'Tomorrow or the next day. Yes … soon.'

There was the sound of voices further along the corridor.

'I must go now, Ma'am.' He stepped away from her.

'I will come to Brocket Hall.'

'Yes,' he said, turning back briefly and fixing her with his eyes before pacing off, 'you will.'

-xoOox-

A footman approached Her Majesty with a letter at 11 o'clock the next morning.

'From Brocket Hall, Ma'am,' he said before retreating.

'Thank you.' The Queen took the letter and opened it, trying not to be too hasty. She read.

'Lord Melbourne presents his humble duty to your Majesty and regrets to inform your Majesty that he is afflicted and unable to travel to London to perform his duties. Yet, there are many duties to perform, as your Majesty is aware, and therefore he begs leave to request that your Majesty travel to Brocket Hall. Lord Melbourne assures your Majesty that she will be well attended to once there.

Your devoted servant,

Melbourne.'

'Oh dear, how dreadful for him,' she declared with mock concern, placing the note in her lap.

Lady Portman glanced up. 'A problem, Ma'am?'

'Poor Lord M. He is unwell and cannot leave Brocket Hall. He requires me to visit him.'

'Oh? He seemed perfectly well yesterday when here.'

'You know how these afflictions can take hold suddenly. There is much business to attend to. Inform the staff that I shall be leaving for Brocket Hall within the hour.'

Emma was shocked. 'Ma'am? You intend to go?'

'Of course! He has asked me and I must.'

'Ma'am … you are the Queen. You do not have to do what your Prime Minister tells you.'

'No, but I wish to.'

'And the Prince Consort, Ma'am?'

'He himself leaves for Wales later today to discuss the coal mines. He will barely notice I am gone.'

'Ma'am …'

Victoria stood. 'Arrange things immediately. I wish to leave by three o'clock.'

-xoOox-

Victoria urged the carriage driver to drive at considerable speed. She arrived at Brocket Hall in advance of when she should have.

She was shown into his study. He was working at his desk and stood when she entered, but perhaps not as fast as protocol dictated.

She beamed on seeing him and noted the rise at the corners of his mouth.

'Ma'am,' he said and approached her to kneel and kiss her hand. 'Thank you for coming so swiftly.'

'Lord M, I was sorry to hear of your malaise. I hope it is not too distressing.'

'Oh … it pains but … I will work through it, Ma'am.'

She turned back to Emma Portman, who stood just behind her.

'Emma, we will not trouble you with tedious government matters. You may retire.'

'Yes, Emma,' added Melbourne, 'the housekeeper will show you to your room, and then feel free to avail yourself of the house and grounds.'

Emma opened her mouth to retort, but one glance at the determination on her monarch's face made her close it, turn and leave.

Victoria turned back to him. For a while neither spoke.

'Do you wish to attend to business, Lord Melbourne?' she asked with a tease.

'Not today, Ma'am.'

'I am here for one purpose. And time is regrettably limited.'

'It is.'

'Therefore … I am ready.'

'Oh … I know.'

'I believe you know me better than I know myself.'

He smirked. 'Perhaps.'

She looked around the room, suddenly a little anxious. 'Here?' she asked.

'No.'

He stepped in and quirked his head slightly, as if deciding what to do.

'I will take you to my bedchamber. It is remote from the rest of the house and … more suited to what must be done.'

'Must be done?'

'Yes.'

'And … what must be done?'

He appraised her for a time, and she enjoyed the silence of anticipation more than anything.

'What you require.'

Her heartbeat quickened immediately.

'Lord Melbourne …'

'Come with me.'

And he paced from the room. He had not many staff and they were able to pass through the corridors and up the staircases without being witnessed. His room was indeed remote from the rest of the house, at the end of a long corridor. He opened the door.

'Go inside, Victoria.'

Not Ma'am. It made her catch her breath.

She stepped in and stopped in the middle of the room and waited for him to approach.

He took some time and after a while she turned to him and exclaimed in frustration.

At this he began a slow pace towards her, only stopping when a foot away.

'These tempers of yours. You must learn to channel them appropriately.'

'I know, Lord M. That is why I am here.'

'Indeed.' He glanced down over her in a way which made her feel she was wearing far less than she was. 'You must do what I tell you, do you understand?'

'I think so.'

'No, do not think … act.'

She swallowed. 'Very well.'

'Here … you are no longer my Queen … I am your master.'

'I understand.'

'Good.'

And, slowly, with a deliberation which made her dizzy, he removed her clothing, not stopping until every shred had been discarded and she stood before him quite naked. No one but Albert had seen her this way, and even then she regularly left on her nightgown. But no shame took hold, instead, she stood quite proudly and let him look on her, relishing the sensation of his fingers as they worked on her clothing and grazed over her newly revealed skin.

When he had finished, Melbourne stood behind her and reached up, taking hold of her breasts. His thumbs and forefingers closed over the nipples and began rolling and pinching them, not so hard as to make her wince, but enough to make her lean back and crave more.

'I wish you to know that I have dreamt of holding your breasts through every single moment of our meetings and discussions. I have seen them encased and contained and I have wanted to take them and ply them and squeeze them and feel them. And, by God, you have needed that. But I have denied myself. I will deny myself no longer, and you, my sweet, compliant Victoria, will let me, won't you?'

'Yes, sir.'

'Good. How appropriately you address me.'

'Thank you, sir.'

He hummed against her ear as he continued to squeeze and pinch her breasts.

She moaned. 'I like that.'

'Of course you do.'

So he tightened his grip. She gasped but he did not stop.

'I may shock you today, Victoria, I may make you feel things and think things you never knew possible. Do you accept that?'

'Yes, sir.'

'If you do wish me to stop – but I urge you to allow yourself to go beyond what you think you can tolerate – you will say a particular word. You will say … 'rook'.'

She moaned at the perfection of it.

'Do you understand me, Victoria?'

'Yes, sir.'

'Otherwise … I shall do as I deem necessary.'

His fingers had coaxed her nipples out to points of such desperate need that she could barely contains her whines.

But at that moment his hands were gone and he brought her over to his desk and pushed her down so that her breasts were squashed against the cold wood.

'You know I shall approach this differently to others, don't you?'

'I do, sir.'

'You know it is my way?'

'I suspected, sir. And it is what I wish. It is why I am here.'

'Very well. Then take it.'

And before she knew it, a spank of such intensity flashed across her right buttock that she yelped in pained shock.

He ignored her. He did it again on the other, and then, before she could even process what was happening, he was spanking her concertedly and repeatedly, over and over, raining down thrashes until her backside went from warm to hot to searingly aflame within a minute or so.

But still he didn't let up. She gasped now at the intensity but knew she could take it.

Her Prime Minister was thrashing her.

He was exerting himself, she could tell. Grunts emerged with each descent of his arm. She adored them.

The blows ceased for a time. She lay panting from the onslaught, but more alive than she could ever recall. And then she was pulled up from the desk back against him.

'Oh, my girl, how well you take it. How much you need it.'

And one hand took hold of her breast again while the other slipped down, reaching further, further until it slipped between her legs. She parted them a little for him, not thinking, just doing.

And …

'Ohh!'

He touched her.

Melbourne breathed against her ear. 'Yes … yes … such a very, very good girl. How wet you are, how responsive.'

She moaned again and pressed herself onto his fingers.

'Yes … for you … for you … master.'

He hummed in acknowledgement and rubbed so that she jerked under his touch.

'Ohh, please!'

'You plead with me? But for what? Do you even know?'

'I …'

Oh, his fingers were skilled and exacting. And his other hand continued to ply and twist her nipple, harder now, so that shots of exquisite pain darted from it. But she took it all, she used it, and it built her and built her.

And he was reaching further under and probing, questing, seeking out the very depths of her.

She gasped and he hushed her. 'Tell me, Victoria, do you wish this?'

'I am not sure for what I am wishing, sir.'

And a finger slipped up inside her. 'This … more …'

'Oh, my Lord …'

'Christ, you are so wet.' His words were unguarded, but they made her only want more. Her husband did not speak like this.

'I …'

'Trust me. I told you … you need it and you crave it.'

And the finger slipped out and was back to circling and nuzzling over that sweetest part of her, which now was so inflamed and ready that she thought she may die if he didn't finish it.

She moaned aloud and reached back for him.

'Please,' she begged. 'Oh please.'

But then he was gone from her, and she fell back against the desk and sobbed at the loss. He moved to a drawer and took things from it but was soon back.

'Stand up.'

She did so and he took hold of her chin in his hands and studied her.

'Do you know how beautiful you are?'

She shook her head.

He smiled softly and then bent to her.

He kissed her.

He kissed her, he kissed her.

And if she died tomorrow life would have been perfect.

But it was not a chaste kiss for long. He pushed open her lips with his and his tongue quested into her. She sighed against it but took it. His kiss was possessive but she wished for that. She longed for it.

And then he broke away and kissed down her neck and her chest until he came to her breasts. He took the right one hard in his mouth and pulled and sucked on it until the nipple was red and tight once again. He tongued and licked and grazed on it, and then, when she thought nothing could be as vivid, he closed his teeth on it.

'Ow!' she cried, and so he did it harder. Her cry turned into a moan and then a sigh. Her body seemed able to change the sensation to something so glorious that she never knew feeling could be like it. His hands meanwhile were attending to his own clothing. He was stepping out of his breeches.

He pulled back and let her see. He was dressed only in his loose shirt, but his manhood rose up naked from under it and she could only stare.

He held it and stroked it and it called to her. He lifted his other hand, the one not holding it, and crooked his finger to beckon her to him.

'Have you wondered?' he asked.

'Of course. You know I have.'

'Then … it is yours.'

And he took her hand and guided it to his erect cock. She did not hesitate in curling her fingers about it.

'Tight,' he commanded and so she curled her fingers hard around it.

She dragged her thumb over the drop of moisture at the top, causing him to hiss. She drew her hand up the shaft, catching more of the drops, and dragged it down again.

'Yes, my girl, God, yes.'

'I …' She stared, for a curiosity had overcome her.

'What?'

'I want to …' She had wondered about this before, but had never broached the subject with her husband, and neither had he. Now, it seemed obvious.

'To what? To taste it?' He said it for her.

'Yes.'

'Do it then. I shall not stop you.' But just as she was about to bend at the knee, he held her up. 'No, wait. I want you bound. I want you restrained.'

And so, he took her wrists and pulled them behind her back, and before she knew it he was binding her arms tight.

'What …?' She broke away to ask but he allowed her no query, silencing her again with his mouth.

'Now …' he said. 'Kneel.'

Immediately, she bent at the knees and looked up at him.

'Open your mouth, Victoria.'

She did so.

He reached down and curled his fingers through her hair to guide her, then fed his cock through her open lips.

She closed her mouth willing around the thick shaft and let him push deeper in. His mouth curled up a little as he observed her willingness. It was curious and immensely satisfying and a hunger took her which made her pull in her cheeks around him and roll her tongue. He sighed out, almost in amazement it seemed, and said, 'Yes, that's right, that's good.'

Her arms were constricted behind her back, denying her the chance to take hold of him which she wanted, but this made her suck and drag on him yet more fervently.

His hold on her hair stung, but she did not mind. He moved her along him and together they worked.

'My God, you are instinctive.'

He seemed pleased. She drew back only to lick along the underside from the base to the tip before rolling her tongue over the head. He hissed this time and drew off her with a laugh of near disbelief.

'Steady.'

She looked up, wondering why she should be. 'My Lord?'

He smiled down and stroked her cheek before taking hold of her shoulders and lifting her to her feet. 'One must exercise restraint in these matters, Victoria, you must remember that.'

He was back to kissing her again, slow and deep, rolling his tongue idly with hers while his hands slipped once again to pinch and ply her nipples. With the added constriction of her hands behind her back, which were starting to send pins and needles through her, she was euphoric with sensation.

And then his right hand dropped and once again found her slit, wet and hot. He rubbed more determinedly than before and she bucked as a jolt of such exquisite sensation dashed through her that it was shocking.

'Oh!' she gasped and immediately his hand was withdrawn again.

'Like I said … restraint.'

And she was turned around again and pushed back over the desk.

'Hmm. You've faded already. That will not do. The purpose is to create a reminder, so one does not forget the benefits of subservience.'

And he went to another drawer and opened it, removing something. She glanced out of the corner of her eye – he had taken out a long leather belt. A sense of anxiety caught her and she tried to push herself up, but he leant down and stroked her back under her bound arms and whispered to her.

'Victoria … do you trust me?'

'I think so, sir.'

'You only think so? Then we should desist. I require your certainty.'

But she couldn't bear the thought of stopping.

'No, no, sir, it's alright. Please don't stop.'

'Remember the word. If you say rook, I will stop immediately.'

'Very well.'

'It will sting, the belt. It will smart, but that is rather the point, you understand?'

'I do … master.'

'Good.'

And he lifted the belt high and brought it down across her rump. It tore through the air with a whistle and hit its mark, leaving a deep red band which made her flesh quiver in shock. It hurt profoundly. Victoria cried out, but she took it.

'Another,' he said, not a query but an assertion. And the belt descended again, catching her slightly higher this time.

Her eyes were blinded with the pain. Flashes of light ripped across them and when she saw again her vision was blurred with tears.

He struck her again and she let the tears fall.

'Ow, it hurts, it hurts,' she said, loudly.

But he did not stop.

She was not sure she was still in the room. She was not sure she was still real. She had somehow been lifted from her body which was burning and seething and twisting and turning in another reality, and here she was, separate. And suddenly so very, very free.

She hated him for the pain and she adored him for the salvation, salvation from order, from duty, from herself.

'Again,' she said, surprising herself.

He inhaled sharply and brought the belt down, lower this time, catching her tender upper thighs. She yelped but pushed back and he did it again.

Her cheeks were wet with tears and her face as red as her abused rump.

Another, and another, but it was catching over the parts he had struck before and she was sobbing so hard she could barely think and she wanted to return and so she said, 'Rook.'

He stopped immediately and the belt fell from his hands. Melbourne was panting, she could hear, he had amazed himself.

'You are striped,' he said.

She recovered her wits gradually.

'But I believe, sir … that I am also healed,' she added.

'That is one intention. Are you alright? I am sorry if I went too far.'

'No, it's alright. I'm alright. But I am not sure I could have endured more of the belt today.'

'Today?' he queried with a rise. 'You are most keen, Victoria.'

'Yes, sir.'

He was looking at her concertedly. 'You are well marked. Do you wish to see?'

He helped her up and he lifted his hand and brushed away her tears. Taking hold of her tenderly, Melbourne guided her over to a long mirror and turned her around. Glancing over her shoulder she gasped. Her rump was lividly red, covered in raised stripes where the belt had struck her time and again.

And as she watched in the mirror, he knelt down and held her tenderly and kissed her aching flesh, planting kisses over every part until it seemed to soothe the worst of the pain away. She watched enrapt of his devotion.

At length he stood again and turned her around to him. 'You know how this ends?'

'Must it end?'

'I mean only today, now.'

She nodded.

'You wish for that?'

'I do. Why wait?'

'You are more than ready.'

'I have been ready for so long, Lord Melbourne.'

'I know.'

And once again he guided her to the bureau and pushed her down over it.

He stood behind her and his fingers once again slicked their way through her wet heat but were then replaced by his cock.

'There are some things which are inevitable, Victoria,' he stated.

'Yes.'

'This is one.'

'Then you must do it.'

'Victoria … at last …' he said, the awe in his voice clear.

And he pushed into her, not hard, but deep and full and he released a sound of such extreme satisfaction that she mirrored it. Oh, he filled her. Oh, it was different and good and new.

He was embedded and only withdrew when he was sure she had absorbed the new state between them. But when he drew back it was as good as his entering of her.

She sighed it out before saying, 'Into me again.'

'What?'

'Again, please.'

'You plead. It is not your place to demand now. Here, you will let me dictate things.'

'Oh, but …'

'Victoria.' A warning.

And so she waited. And soon enough she had it again, that slow stretch, that deep penetration which she longed for.

'Oh … my Master.'

'Yes,' he hissed as he pushed into her to the hilt. There again the stretch, there again the fullness.

She whined. He felt so very real, the sensation of his hard length combining with the glow of her aching behind.

'Please … more,' she said, barely aware she'd voiced it.

'I thought I had told you not to beg.'

But now he obliged anyway. Gripping hard, he began to pump her, thrusting his hips with a new-found determination.

She moaned but only found it yet more glorious.

At one point he withdrew and moved her round to the side of the table before plunging in again.

'Look,' he said.

She wasn't at first sure what he meant, but he reached down and turned her head to the side. She saw them in the mirror.

He stood, still in his shirt sleeves, holding her bound wrists for purchase, and he moved in her, pounding her harder than ever, for she needed it and he knew it.

He thrust hard and fast, forcing his cock so deep that she was jolted against the side of the bureau with each drive forward. The contrast between the fulfilling completion of him inside her, and the burn as he smacked against her red raw backside made her world spin. She let a whine rise from her until it grew shrill.

She would come so hard she wasn't sure she'd survive it. And he could tell.

'Wait,' he stated, a sharp word in tune with the sharp thrusts through her quim.

'But I can't any longer,' she moaned, her fingers scratching at the bureau to gain purchase.

'You will wait,' he said again, and she could not question the dominance of his voice.

'I want to come,' she whined again, but knew it was futile.

And, still holding her bound wrists with one hand, he reached under her and found her clitoris with the other. Slowing his strokes, he moved in her with exacting tenderness now while his fingers coaxed and circled and enticed.

It was too much. 'Oh God! Oh Master, please, please!'

He bent over her and she felt the heat of his body through the thin cotton of his shirt. 'You plead for it?' he murmured in her ear.

'Yes, I do, I plead!'

'You want it? That release? That ecstasy?'

'You know I do, sir.'

'Even after all this? After I have thrashed you so that you are raw, I have bound you until you can no longer feel your hands … you are still so very ready to come?'

'Oh, I am, I am, please, please!'

'Wait,' he said again, but his fingers didn't slow and his cock was as deep within her as was possible.

Melbourne breathed hot in her ear and worked himself perfectly inside her. She held herself coiled, concentrating so hard not to let her pleasure break that it hurt more than anything else. Her eyes were squeezed tight shut and she bit her lip so hard a graze of red appeared as blood oozed from it.

'Open your eyes, Victoria,' he said. 'Watch.'

She forced her eyes to open and looked in wonder at the sight of him buried within her, leaning over her, his hand under her.

'Ah!' she gasped, for it was completely glorious.

'Ask me once again,' he said.

She inhaled sharply, and said, 'Please, Master … please may I come?'

'Very well …' he whispered, and began to move once again. 'You may come.'

And she wanted to speak, she wanted to thank him, but instead it broke.

And it broke so hard that she was ripped from herself, torn apart by such intense pleasure that she opened her mouth and a sound poured out that was inhuman but so very her.

He pinned her down with his cock and his hands, but even so she was paralysed as it tore through her. Rapture. She stared at herself, at him within her, as it took her and it was a sight of such beauty that she would remember it until her dying day.

It endured far longer than any orgasm she could previously remember, and its intensity broke through the bounds of reason. Victoria was broken with pleasure, and never had a fracture been so healing.

But it at last faded and only then did he allow it to claim him too.

He pulled back on her arms hard, forcing her slightly up off the table, moved his other hand to her hip where his fingers dug into her so hard she would find five small bruises later, and he came.

Melbourne tried to watch in the mirror but he turned instead to look down at where his cock was consumed by her body, and released. Burst after burst poured into her in long, white streaks of ecstasy.

He grunted with the brutality of his climax, not stopping his pounding of her until every drop had left him and was pooled deep within her.

It took some time for sense to return. When it did, he reached to undo the bindings on her arms and she let them fall to the side with relief. She had not realised how numb they had become. She hissed as blood flowed back to them.

He leant over her again, stroking and soothing. 'Shh, shh, my darling, my perfect beautiful darling.'

He rubbed her arms, easing them back to sensation. Slowly, regrettably, he slipped from her, and slowly, tenderly, he guided her to the bed and lay her gently upon it on her side. She whimpered a little for she was suddenly so very, very tired.

She was vaguely aware of drawers being opened, of items being acquired and then … bliss. He was spreading an ointment into her abused backside, a cream which cooled and soothed and eased. She sighed out, long and slow.

And then he placed the softest eiderdown over her and her body, which had begun to grow cold, soon warmed again.

Melbourne moved round and knelt beside the bed on the other side, stroking the hair from her face. 'Victoria … I have some water. Would you like some?'

She lifted her head a little and took a drink, enjoying the coolness of it seeping into her. She smiled then lay down again. 'I am so very tired.'

'Yes, my darling. Sleep. You need do no more.'

'Was I good?'

She heard his breath catch, but she received no answer. She managed to open her eyes and saw tears in his.

He smiled softly. 'Yes … you were good. Sleep.'

'You won't leave me?'

'No, I won't leave you.'

And as she drifted off, she felt him climb into the bed beside her, curl his arms about her, and together they fell asleep.

Hook laid his head on his desk. He knew that he should move to his bed, but it was too big, too empty. It reminded him that he was alone and unloved. No woman would share his bed for as long as he was trapped in this ageless, eternal hell. He was surrounded by flying puling spawn, incompetent pirates, and natives. All of who seemed determined to make his life miserable. Was it too much to ask for a woman? His own woman? His own pirate queen with whom he could rule the seas? His heart ached for a moment. His missing right hand throbbed with ghost pain, which was echoed by the real pain around his wrist, although the muscat dulled the feeling somewhat. Damn that flying bastard to Hell. Someday I shall kill him, and then I shall be free of him, he whispered. His eyes grew heavy. His breathing became deep and regular. The pain lingered in his sleeping sub-conscious, but mercifully, it was pushed to the background. The man slept on the hard desk.

Darkness surrounded him. He was on shore. He was in the dream. The same one he'd been having for months. As always, thankfully, it was a foreign territory, perhaps it was somewhere in the Americas or perhaps the Mediterranean. Behind him and around the cove, dark shapes rose up in the starlight. He did not know where and he did not care. The most important thing was that it was not Neverland. But against his desires, the pirate in him sniffed. There were the scents of sea, land, dry soil, dry heat, and - there - a hint of plants: olive, grapes, fennel, rosemary, and wild oregano. He looked at the stars. They were real stars, not Neverland stars. He searched his memory for stars of the real world. Crete. After months of ignorance, he'd finally cracked the mystery of the place.

Hook stood in his dressing gown and black breeches. His silk black shirt hung open at the neck and was pulled out of his waistband. His feet were bare. The pirate's hair was a riotous mass of glossy black curls. The man rubbed his hand over his goatee. His hook gleamed in the dim light. Aside from his hook, he was weaponless. He was physically safe here. There was no Pan, no hungry crocodile, none of his useless pirates. He breathed out slowly and relaxed. The waves rolled in smoothly and covered the shore for a moment before they rolled out again. It was high tide. The cove was comfortably warm, and there was a light breeze. But still he shivered, only, however, in anticipation. An errant curl tickled his cheek and he pushed it away with his hook and hissed in irritation. Something was different tonight. There was a current of energy in the air. The night practically hummed with it. He sniffed again.

She came. He heard her before he saw her, soft footsteps as she crossed the pebbles of the beach. He could hear the click of the rounded rocks, worn smooth by eons of water, as they softly rolled and moved under her feet. He hoped that she would come and here she was, his mermaid, not that she was anything like those treacherous fishy wenches in Neverland. In fact, she wasn't a mermaid at all, but she reminded him of storybook mermaids from his youth, beautiful, buxom, and meant to be covered in jewels and little else. The only woman who willingly shared his life, but, the irony, only here in his dreams. She always left too soon for his liking. The desire to pull her into his real life rolled over him like a storm wave at sea. It tossed his battered and embittered heart like a ship in a hurricane.

His forget-me-not blue eyes warily watched her dark shape as she approached. She, like him, was dressed for comfort in strange soft breeches, a camisole, and a cotton dressing gown. She always kept her dark hair up. His hand itched to take it down and run his fingers through it. He knew she came from another age, her clothing told him this, as did her wicked tongue. She challenged him. He enjoyed it. She was a mouthy little wench. He snorted and then gave a lopsided smirk. She did not fear him. He scowled as he realized she was the only one who had no fear of him. Suddenly, he was doused with a feeling of loneliness. He felt old and tired. He shook his mane to rid his head of the unwelcome thought.

She walked up to him, and looked up. Her brown eyes glinted in the moonlight. She smiled. Ye Gods, she was brazen. The light scent of her faded perfume wafted towards him on the breeze. For a moment, he resisted the urge to lean down to inhale her faded scent and pluck the hair ornament out of her hair. He was too much of a gentleman, but, wait, Hook was also a pirate. Eton and proper society were too long gone, he decided. He did not have to be a gentleman if he did not desire. It was time to move this relationship apace. The pirate smiled back.

Then, for the first time in all of the nights, he reached out and touched her face. Surprise flashed across her countenance, but then she smiled. The woman, his woman, closed her eyes as his left hand gently explored her cheek, closed eyes, lips, jawline, and then the curved shell of her ear. She moved closer towards him, and he felt her hand settle gently on his left hip in order to steady herself. The sounds of the ocean receded into the distant background. The pirate reached around and plucked the strange ornament out of her hair. He tossed it aside and it fell, unheeded, on to the pebbles. He slid his left hand into her hair to untangle the heavy mass of dark chestnut curls. He reached out with his hook and gently moved the heavy strands that fell onto her shoulder. The hair hissed along the blade, but not a single one was cut by the razor sharp edge. Oh yes, the hook could be gentle if required. He felt her other hand on his back, and she slid farther into his arms. Her right hand slid from his hip to the small of his back. She rested her cheek on his chest. Hook lifted the hair to his nose and inhaled. An almost cat-like purr emanated from him, as he took in her scent: soap, perfume, ocean, rosemary, and woman.

The man heard her inhale, startled, he realized that she was echoing him. She breathed in the welcome smell of rum, tobacco, sea, leather, and gunpowder. The woman sighed, and whispered, My pirate. He felt her hands curl into his back through his clothes. He dropped her hair and splayed his hand against the back of her neck and upper shoulder. His hook gently made its way lower. He pulled her against him, and pressed his face into her hair. They stood. Each reveled in the feel of the other's solid weight against their body. The moon watched, a silent witness to this new turn of events.

After a long while, the woman shifted in his arms and started to slide away. Disquieted by this action, he scowled as she moved. Hook had been dismissed. No one dismissed him, not even- She grasped his hand. She laughed softly when she looked up at him and saw his outraged expression. The woman's hand felt cool and soft in his. It was small. Hook's was large, warm, and calloused. He looked down to see their hands together. It was a night of firsts. He looked back to her eyes. She solemnly watched him. Then the woman reached up with her free hand and gently touched his cheek. He rubbed his thumb across the back of her hand. The pirate refused to shut his eyes. He boldly stared back at her as her fingers delicately chased the chiseled features. When they danced across his lips, his eyes flared red for a moment, and then closed. He soaked in the first feminine touch on his lips in what seemed to be a hundred years. A small moan escaped him. Her fingers stopped. The pirate's eyes snapped open, and he glanced down to see if she would mock him. Her gaze was filled with admiration. Something wicked made him open his mouth. The minx responded by sliding her fingers slightly deeper. He bit gently and then released. She pulled them away and then pressed them to her lips. He adjusted her hand in his, but then realized her attention had wandered. She was exploring his hook. He hissed and tried to pull it away, suddenly embarrassed by his long-time companion. He wanted nothing more than to hide it behind his back, discard it, or grow a new hand. He wanted to be whole with her, but she wouldn't let go.

Hook heard a soft sound. Confused, his head went up, searching for the origin. Ready to pull her behind him, defend her from danger. Then he realized it was she. The woman repeated herself, whispering. Stop. Don't pull away. It is a part of you. He grunted in response, a typical male non-committal noise. Age-old communication played out between a pirate king and his queen. Her finger traced the patterns on the wooden case. Then she ran her finger down the silver hook. A soft gasp, a welling of blood, as the tip of his hook caught the pad of her finger.

He tsked softly, and then growled gently, Give it here. With the blunt edge of the hook, he guided her finger to his mouth where he kissed the blood away. She watched him throughout this encounter. She pulled her finger away and looked at it.

And then, saucily, glanced up and said, I think you hurt me here. She pointed to her cheek.

Beauty, I do not-  Suddenly, Hook caught on. A game. A courting game. It had been too long since he had played, but he was good at games. Ah, yes, my mermaid, I see the wound. Allow me to make it better. He leaned down and kissed the imaginary cut. He straightened.

And here. She whispered. She pointed to her temple.

Of course, my lady. He kissed that spot as well. The pirate was starting to appreciate this game.

And here. She sounded winded as if she'd run fast down the beach. She pointed to a spot on her neck. This one hurts exceptionally bad.

He tensed, his heat skipped a beat, and then he said slowly, Yes, my dear, that is a hideous wound. It might take a larger kiss.

The woman nodded. Her heart thumped largely and slowly. He carefully moved her hair away with his hook, and then nuzzled her neck. He heard her gasp and then purr. Hook inhaled her scent again, and then laved her neck. Her hand slowly moved up his left arm and then he felt her tangle it in his hair as she grasped the back of his neck. Yesss, don't stop. I'm not sure it's better yet. It was all he could do to answer with a growl. He felt her lips touch his neck, and then he couldn't help it, Hook pulled her face towards his and he kissed her. He reveled in the action. She answered him. She pressed against him. His hand moved down her back, his hook pulled her closer. He felt her pull him towards her.

Hook broke the kiss, and a mew of disappointment bubbled up from her. He shushed her, and then scooped her up into his arms. He strode determinedly away from the pebbly beach, hoping for sand. The goddess Tyche smiled upon them, and he found a sandy spot away from the gaze of the moon. He laid the woman down and then flung himself onto the soft velvet sand next to her. She impatient pulled him towards her. Her leg slid around him and pulled him even closer. He felt her hands on the skin of his back. Her legs wrapped around him. He felt her lips against his neck. She nipped him. Impertinent chit, oh how he loved her for that. Loved? He frowned. He dismissed that thought with a care to remember to examine it later. He only had now with her before Aurora, rosy fingered dawn, came and chased his mermaid back to the shadows of dreams. This time she kissed him as he pushed up her camisole and slid his hand upwards towards her -

Captain. Captain...

Hook groaned. Confused, he felt hard wood and leather against his cheek. She'd left him. His mermaid abandoned him. Wait. No. She'd not left him. Not this time. Smee took him away from her. Smee, bloody Smee. He was back on his ship. For a moment, he heard her sad whisper in the air of his cabin: My beloved pirate, no! Don't leave me! He ached to feel her against him again. He could still smell her on him. He could feel the warmth of her skin on his fingertips and the softness of her lips.

He whispered to himself. Oh, evil day, Hook is alone...again. Alone. Unloved. Old. He heard the ticking of the clock. His wrist ached and pained him. He felt the familiar rocking of his ship. The weight of his heart seemed to equal the weight of three anchors while dragged by the Leviathan to the bottom of Davy Jones' Locker. He raised his head and stared at his bosun. His eyes flashed red. Smee backed up a step. He scowled, and then growled low. What. Is. It? Why did you wake me, Smee?

'Tis the men, sir

I was dreaming, Smee. I was far away from Neverland, Pan, and that wretched ticking beast. And you woke me for stinking, drunken, incompetent sea-dogs. He sneered the last two words. Hellfire and damnation! Why do I pay you to assist me, if you must run to me to solve every problem? Is your head as empty as a dried out coconut? He barked out angrily. He reached out, grabbed his hook, and then smashed the clock.

Mermaid! His heart screamed, Where is my mermaid? He dropped his hook on the desk. He stood, stared at the broken and useless clock for a moment, and then sighed. Broken and useless like you, his inner voice whispered, No wonder she is in another place. She probably has a man called Husband in her world. You are a diversion, a dream. Pan is right. You are alone, unloved, and old. Resigned, he turned and picked up the harness for his hook. Come, Smee, let us start our day.

As he turned back, he caught sight of himself in the mirror. What was that on his neck? A bruise from sleeping on his desk? His punishment for sleeping alone? He looked more closely. No, brimstone and sulphur, it was a love bite. He raised his finger to it. It was sensitive when he touched it. His little mermaid was real. If she was real, then he could find her. He smiled. Suddenly the day was looking better. Perhaps he would not shoot Smee after all. He hummed a drinking song, and readied himself for the day.

This is the worst assignment ever! I'm supposed to think up a story, write it, and illustrate it by tomorrow! Do I look like a novelist?! This is impossible! I can't tell stories! What about your explanation of the noodle incident? THAT WASN'T A STORY! THAT WAS THE UNVARNISHED TRUTH! Oh, don't be so modest. You deserved a Pulitzer.

: Do you mean to say it's time for bed and you still haven't written our story for school?! I figured the story was already done! How could it be done if YOU didn't write it?! Obviously it had to be done before now, because it's 8:30 and I'm supposed to be in bed! Wait a minute! If the story had been written in YOUR past, that would mean I should've written it! Well, why didn't you?! Because I came to the future to pick it up when it was DONE! If you hadn't screwed up my past, your future wouldn't be like this.

Look, guys, you can't gang up on ME! Oh yeah? Why not? Because we're all the same Calvin! In one hour, the 6:30 Calvin will be ME, and in another hour, we'll BOTH be the 8:30 Calvin. That means you guys will suffer whatever you do to me. Oh yeah. Oops. Whose dumb idea was this anyway? His? His!Hobbes?\"

\"Yeah, Calvin?\"

\"Something in my bed is drooling.\"

Hobbes shifted around, frowning in the dark. \"You mean under the bed?\"

Calvin shook his head. \"No, in the bed,\" he insisted. \"There's a wet spot here.\" He wiggled around uncomfortably, nearly jumping at the small groan Hobbes let out. \"Are you ok?\"

\"Um, yeah, I'm... I'm fine.\" Hobbes scooted away from his bedmate.

    \"Hobbes? What's wrong?\" Concerned about his friend, Calvin reached out. He yanked his hand back as if burned. \"H-Hobbes?\"

    \"Sorry,\" Hobbes whispered miserably.

    \"It's... it's ok,\" Calvin whispered back. He reached out again, carefully touching the rigid flesh that jutted towards him, leaking its fluids onto the bed.

    Hobbes stifled a hoarse cry at the tentative touches, covering his mouth with a paw to muffle the sounds he was making.

    \"You're hard,\" Calvin said in a soft, wondering voice. Daring now, he circled his small fingers around Hobbes' arousal and stroked.

\"Calvin!\" Hobbes gasped the name out loudly, forgetting his earlier attempt to remain silent.

\"This is so cool.\" Calvin curled in closer to Hobbes' fuzzy body, reaching out with his other hand. He grinned as his fingers brushed over the tiny spines scattered along the length of Hobbes' erection. \"You're even fuzzy here,\" he told Hobbes in an awed voice. \"It's leaking a lot, too.\"

\"It's a tiger thing,\" Hobbes managed to respond as he writhed under Calvin's innocent touch.

Calvin continued to pump, growing steadily more excited himself. He'd played with his own penis before, but it had never occurred to him that Hobbes had one too, and that it would be even more fun to play with his. Especially since it was so much longer!

\"Calvin, that's... oh!... that's really... ah!... don't stop!\" Hobbes thrust his hips up, pumping into the soft tunnel of flesh that Calvin's hands had formed around him.

    Calvin hummed happily to himself for a while, but then his hands stilled. His forehead wrinkled in thought. \"Hobbes?\"

Hobbes stifled a groan. \"Y-yes?\"

\"Are we having sex?\"

\"Um... kinda. I mean... well, almost?\" He was expected to hold intelligent conversation at a time like this?

        \"Oh.\" Calvin sounded rather forlorn. \"Well, how do we do it right, then?\"

\"We'd... well, we'd have to... you know.\"

\"I do?\"

\"Yes! I mean...\" Hobbes sighed heavily. \"It's kind of hard to explain.\"

\"So show me, then. You... do know what to do, don't you?\"

\"I-I guess. I do watch nature shows, you know,\" Hobbes retorted. \"You have to take your pajamas off,\" he instructed after a moment's thought.

\"You could have said so in the first place,\" Calvin muttered as he wiggled out of his clothing.

\"Are you trying to ruin the mood?\" Hobbes snapped peevishly.

Bare now, Calvin stared at Hobbes. \"Geez, sorry!\" He pouted, arms crossed over his chest.

Hobbes stared at Calvin's protruding lower lip and smiled. \"It's ok,\" he whispered. \"Um, turn over onto your tummy.\"

Calvin complied. \"What are you going to do?\" There was no reply, and the rasp of a rough tongue down his back made him hiss and arch up convulsively. He could feel his own dick stiffen quickly, jabbing into the mattress.

    Hobbes purred softly as he tasted Calvin's skin. He licked everywhere, leaving no spot unbathed.

Calvin stuffed his pillow into his mouth to muffle the scream when Hobbes' tongue passed over his quivering anus. \"Hobbes!\" he protested weakly. \"What are you doing?\"

Hobbes ignored the protest and continued laving the sensitive flesh thoroughly. The scent, the taste, the texture; it all combined to drive him absolutely wild. He growled under his breath, and his paws kneaded the mattress on either side of Calvin's hips.

Calvin gave up on speech and began to press back against the wickedly mobile tongue that seemed intent on probing every crevice of his body. And then he let out a screech when it did, slipping past the tight pucker of muscle and slithering in deep. Hobbes' whiskers were tickling against his butt as his tongue worked inside him, and Calvin didn't know whether to laugh, cry or scream. He settled for whimpering softly.

Hobbes continued to lick and probe, his agile tongue opening Calvin up for his further advances. Finally, he couldn't hold back any longer. His erection was begging for attention, and the humping motions he was making against the bedsheets just weren't enough. He pulled his face away, his tongue leaving Calvin's body with a wet slurp. He licked his muzzle. \"Calvin?\"

\"Wzzhuh?\"

\"I'm gonna do it now, ok?\"

Calvin nodded frantically, having decided that Hobbes' ideas in this department definitely had merit. \"'Kay.\"

Hobbes prowled up the bed, crouching over Calvin. With just a slight wiggle, he aligned his penis to Calvin's loosened hole. He pushed forward.

Calvin gasped and moaned as the head popped inside. The moan turned into a low, drawn-out cry of pleasure as Hobbes advanced, his long, thin cock sliding easily inside. The soft spines tickled against his stretched opening, making him twitch uncontrollably.

Never in his life had Hobbes experienced anything so hot, so tight, so... gooood. Fully buried inside of Calvin, he waited a moment before pulling back and then thrusting forward again.

Calvin's eyes nearly bulged out of their sockets. As Hobbes' erection forged its way into his willing body, it passed over a spot that shot sparks of lightening through him. And he could still feel those spines, brushing against the inner walls of his ass, heightening the sensitivity of nerve endings he never knew he had. Nerves he was never likely to forget existed, now.

The quiet room soon filled with moans, gasps, purrs and growls as the two rocked together. Calvin was completely surrounded by the furry body of his friend, his lover. He rocked against the bed, impaled wonderfully by the throbbing cock lodged deep inside of him. It soon became too much, and when Hobbes carefully nipped the back of his neck, he gave a full-body shudder and came, his limbs convulsing spasmodically from the jolts of intense pleasure.

Hobbes nearly let out a yowl when Calvin's muscles started to twitch and quiver around him, drawing him in deeper, milking him. Some part of his brain dimly registered the ripping sound as his claws tore through the sheets, but he was more focused on the ripples of pleasure that washed over him as he came, spurting his seed inside of his lover, claiming him, marking him. He collapsed on Calvin's back, gasping for air.

Calvin's body was more relaxed than it had ever been. He grinned when Hobbes flopped down on top of him, still purring in his ear. He yawned, snuggling black against his warm, furry blanket. \"So... that was sex, huh?\"

Hobbes let out a rumbling snort. \"Yeah, that was sex.\"

Calvin grinned sleepily. \"Cool.\"



Time for a Spongebob superhero fanfic. This time, Spongebob's friends will become superheroes too. Their mission is to rescue Bikini Bottom from Plankton. And yes, I'm making a multi-part fanfic this time.

There will be OCs...because I feel that original characters are what makes Spongebob fanfics interesting. You're perfectly welcome to use the canon ones though.

And yes, Wendy will be in this fanfic. Because you seem to like her.

Chapter 1: Plankton's Escape

As usual, it was sunny in Bikini Bottom.

It reflected the mood of a certain sponge who lived in a pineapple under the sea. He never seemed to have a frown on his face...unlike Squidward Tentacles.

\"Life sure is going well for us, huh, Gary?\" asked Spongebob.

Gary nodded. He had hooked up with Snellie, though he had wondered how she had come into the possession of Sandy Cheeks.

Likewise, Spongebob was now the manager of Krusty Krab 2.

However, he took time off to visit Plankton. He was locked away for being a madman.

Well, hopefully he would regain his sanity soon. The Chum Bucket was a pigsty at this point. He wondered how Karen was doing without him.

Strangely enough, life seemed to be going well for Squidward as well. He had adopted a worm recently. She had taken a bite out of Spongebob's pants.

Well, at least they weren't his lucky pants.

Now that Squidward had companionship, he was less mopey than usual.

Perhaps that what was he needed.

Mrs. Puff's life was going well too.

Why? Because Spongebob had finally passed his boating exam.

How? Because Mr. Krabs said he would give him a Krabby Patty if he passed.

It worked surprisingly well.

Finally Mrs. Puff was at peace.

Though she wondered what other students she would have this year. Sometimes she even got residents from Rock Bottom. They creeped her out.

On the subject of Mr. Krabs, he was making lots of money. But that surprised nobody.

He was absolutely delighted.

In fact, he was dancing.

\"I'm rich! Rich, I tell you!\" exclaimed the crab.

And the best part of it was, he never had to worry about Plankton ever again. No longer would he scheme to take over Bikini Bottom, no more would he try to drive him out of business...

...or so he thought.

Meanwhile at the asylum...

Plankton wondered how things had gone downhill for him.

He had managed to sell Neptune's crown for a hefty sum, frame Mr. Krabs for the crime, and steal the Krabby Patty secret formula.

Why hadn't he used Plan Z before? It would have saved him a lot of humiliation.

And he would probably be stepped on a lot less.

Not only that, but he even managed to take over Bikini Bottom.

But unfortunately, the assassin he hired to kill Spongebob and Patrick didn't do the job. It seemed they were tougher than he thought.

He wasn't sure how they managed to survive Shell City, but they retrieved the crown and prevented the execution. And for some strange reason they met David Hasselhoff. He wasn't sure whether Pearl had fainted knowing it was the day of her father's execution or seeing him shirtless.

Not only that, but it seemed that Spongebob had found the weakness of his evil mind control helmets. They operated on sound.

When his scheme failed, he was sent straight to the loony bin.

Although, at least Neptune didn't kill him for the theft. Seemed he was too small for the trident to blast him efficiently.

However, he had seen him bald, which nearly blinded him.

Now he was stuck watching Mr. Krabs grow even more successful than he already was. How he envied that red crustacean.

It just wasn't fair.

In other news, Dennis had retired from being an assassin. Now he was the boss of the Thug Tug.

On the lighter side of things, he had plenty of time to plot his revenge. The only question was how he was going to go about it.

First things first, he needed to find a way to escape.

As he sat in his tiny padded cell, he began to ponder.

What evil scheme should he come up with? And how would he break out?

Suddenly, he noticed something interesting.

It seemed there was a small crack in one of the walls.

Two of the guards were surprised at the occurrence.

\"How did that get there?\" asked one of the guards.

\"It's probably nothing.\" answered another one of the guards.

Plankton began to smirk.

All of a sudden, he had an idea.

Meanwhile...

Now that Spongebob was a manager, Patrick was doing his former job, flipping Krabby Patties.

He was doing fairly well, though he burnt his hands a few times.

Although, it was kind of hard restraining himself from eating the patties that were meant for the customers.

Maybe when he was done with his shift he could visit the Krusty Krab 2.

While the Krabby Patties tasted the same, he preferred eating at the restaurant that was personally managed by Spongebob.

It was pretty successful.

Perhaps it was because Spongebob treated his employees better than Mr. Krabs did.

They were Sandy and Larry the Lobster.

Seeing Spongebob make so much money pleased Patrick very much.

Perhaps if Mr. Krabs decided to open a Krusty Krab 3, he could be the manager.

The idea made him feel happy.

Well, he decided to visit his pet rock.

It seemed both his neighbors had pets now.

Good thing he wasn't left out.

\"I wonder what's on TV?\" asked Patrick.

As it turned out, it was Mermaid Man and Barnacle Boy.

\"Oh boy!\" cheered the starfish.

They were fighting the Man-Ray.

Of course, Mermaid Man showed him who the bigger man was.

Then they faced the Dirty Bubble.

Barnacle Boy sure burst his bubble.

\"This show never gets old! I sure wish I could say the same about Spongebob's show...\" noted Patrick.

At least he let him star with him...pun intended. Besides, now they had two movies. In his opinion, that was better than one.

He went to the pantry to get some popcorn.

Elsewhere...

Pearl was happy at her father's success. Business was booming at the Krusty Krab.

Or should she say...Krusty Krabs?

Although, something terrible had happened following the grand opening of the Krusty Krab 2.

Her father had been framed for theft. Of King Neptune's crown.

She had flipped when she discovered that King Neptune planned to execute him.

Though to be honest, she could understand why he had thought he had stolen the crown. But she never doubted her father's innocence.

Besides, why would her father sell the crown at Shell City when he could sell it to Bass Vegas? It was a lot closer and could earn him a boatload of money.

Though her father was greedy, he at least seemed to love her more than he loved money.

Personally she thought the starfish working at the Krusty Krab was cute.

What was his name again?

Oh wait, his name was Patrick.

Patrick Star.

Perhaps she should read his nametag to help her remember.

On the other hand, she wondered why Krabs had Squidward as an employee.

He didn't seem to like his job.

Though he did seem happier recently.

Well, as long as Mr. Krabs was still in business, she was content.

Though personally she preferred hot boys over money.

Maybe David Hasselhoff would return to Bikini Bottom someday.

Meanwhile...

In her treedome, Sandy had made another invention.

\"These super serums sure are nifty.\" noted Sandy.

She hoped to use them in an emergency.

Of course, she wasn't exactly sure what that emergency would be.

Things had been pretty peaceful in Bikini Bottom ever since Spongebob had recovered Neptune's crown.

But she figured that she shouldn't take peace for granted.

She got the feeling that something bad was going to happen soon.

Sandy wasn't sure what.

But she decided to trust her instinct.

There were enough for eight people.

Or animals. Though she wondered if giving them to animals was a good idea.

Well, they were there if somebody needed them.

Perhaps somebody would.

She left to go jellyfish hunting.

Fortunately, her suit protected her from the stings.

At the institution...

Plankton squeezed through the crack.

Perhaps being small had its perks.

However, he discovered that a guard was approaching.

It would be best if he weren't discovered.

So, he put on a pair of joke glasses.

\"There we go.\" said Plankton.

He promptly left the asylum.

\"Good day to you, sir.\" spoke the disguised inmate.

\"Good day.\" greeted the guard, not suspecting a thing.

Plankton left with a wide smile on his face.

He was free!

Now he could plot the conquest of Bikini Bottom once again.

For now, he would head back to the Chum Bucket.

He had been away from home for some time.

Meanwhile...

\"Why do I feel a chill going down me spine?\" asked Mr. Krabs.

It was a creepy feeling.

\"Maybe some change fell out of your pocket?\" suggested Squidward.

The crab gasped, and pressed his claws against his head.

\"No! Not me change!\" exclaimed the crab.

Squidward chuckled. He always knew how to set off Mr. Krabs.

He looked around to see if any change had fallen out.

He sure hoped that none of the customers had taken his change.

However, he discovered that there wasn't any change in his pockets at all.

\"Whew!\" exclaimed Mr. Krabs.

It seemed that he hadn't lost any money.

That was a big relief.

And yet, he still wasn't sure what that feeling in his spine was.

Wait...he was a crab. Did he even have a spine?

Anyways, perhaps it was something he ate.

He decided to go count how many customers he had.

One of them wondered if Mr. Krabs thought he was a living ATM machine.

Well, at least the food tasted good.

As Mr. Krabs counted the customers, he failed to notice Plankton scurrying back to the Chum Bucket.

At the Chum Bucket...

\"Karen! I'm home!\" exclaimed Plankton.

He gasped in alarm.

While he was gone, the Chum Bucket had become a total mess.

\"Oh no! What happened to my restaurant?\" asked the evil genius.

Well, it wasn't popular with the customers anyway. At least until he took the Krabby Patty formula.

Curious, he noticed Karen's monitor.

He decided to flip the switch to see if she would turn on.

Fortunately, Karen rebooted.

\"Whew!\" exclaimed Plankton.

\"Plankton? Is that you?\" asked the computer.

\"Yes, it's me! Why didn't you visit me while I was at the asylum?\" inquired Plankton.

It was known as the Institute for the Criminally Tiny, if he recalled correctly. But it seemed they had decided to expand it to other lunatics considering that most of them weren't as tiny as he was.

That was why they weren't so concerned about the tiny crack in the wall.

\"I may have gone into sleep mode awaiting your safe return...\" noted Karen.

Besides, if the guards had seen a living computer enter the building, they might assume THEY were the ones going crazy.

\"Ugh...this place smells awful...\" noted Plankton.

\"It's alright. I'll clean up. It's my fault that this place ended up this way.\" spoke the computer.

Suddenly, Plankton realized something.

\"On second thought, I think we should leave. The BBPD might be looking for me!\" exclaimed Plankton.

\"You're right, Plankton! We should go!\" shouted Karen.

A red ! appeared on her screen.

\"Fortunately, judging from today's newspaper, they don't seem to realize I'm gone yet. But it's only a matter of time before they notice, and by extension it's only a matter of time before they come looking for me! And this is the first place they'll look!\" exclaimed Plankton.

\"That's a serious problem!\" agreed the electronic lady.

She began to sweat.

\"I have to think of somewhere where the police won't find us...\" noted the genius.

\"Wherever you decide, it can't be worse than this place. It's hit rock bottom!\" exclaimed Karen.

\"That's it, Karen! You're a genius!\" shouted Plankton.

\"I am? You always seem to call yourself a genius...this is kind of new to me.\" acknowledged the computer.

\"Nobody in Bikini Bottom ever goes to Rock Bottom...they find it to be too scary. That includes the BBPD!\" shouted Plankton.

\"You're right. I wonder why they have a bus that takes people there...\" noted Karen.

\"Well, it's time to get going. All we need to do is find a new residence there and we'll be all set.\" spoke the mastermind.

\"Well, we better get to Rock Bottom before the authorities find us. Otherwise we'll be rowing a boat in a river of lava.\" remarked Karen.

She uploaded a picture of Plankton rowing in a river of lava to demonstrate. Understandably, he was panicked.

Suddenly, Plankton had another idea.

\"Once again, you're a genius! We'll make our new base of operations in an underwater volcano!\" exclaimed the evil genius.

\"But what about all the magma?\" asked Karen.

\"Relax, I'll make some alterations so it will be safe. I wouldn't mind using the magma to protect us from the police force though.\" grinned Plankton.

Karen gave the thumbs up on her monitor.

\"Well, off we go. To Rock Bottom!\" exclaimed Plankton.

Plankton and Karen left on a giant Plankton robot.

This was noticed by Patrick.

\"Was that a giant robot?\" asked Patrick.

\"Patrick, stop looking out the window and get back to work!\" ordered Mr. Krabs.

\"Yes, Mr. Krabs.\" agreed the starfish.

While the movie was the narrative finale of the series, I figured I would come up with a theory of sorts as to what happened next.

It's a bit of a wild theory though.



Baby Prunes

Baby Prunes

Baby Prunes

Baby Prunes!!

It looked like she will sent you to the moons

Baby Prunes call her daughter lazy

But getting embarrassed by Spongebob and Patrick driving her crazy

Baby Prunes is very old and angry

Chocolate make her very mangry

She enjoys lava boarding, sky diving and boxing

Plus she has a little moxing

Baby Prunes is the most grumpy, cranky, ill tempered, selfish old lady in Bikini Bottom

If everyone can ask me she is gonna hit the rottom!



After SpongeBob made his homemade Snail-Po for Gary and Patrick, there's a knock at the door

SpongeBob: Huh that's odd. I thought I heard a knock at the door.

Mr. Wiener: Hello SpongeBob.

SpongeBob: Mr. Wiener? What are you doing here?

Mr. Wiener: To give you a promotion.

SpongeBob: But you fired me.

Mr. Wiener: Well my customers love you wienie patties. Now come with me.

Pizza Pete: Hold on. He came to me after you fried him.

Senior Taco: Then he came to work for me.

Noodleman: And me.

They start arguing

SpongeBob: Guess stop! I get you all want me to work with you but it's stressing me out. I need time to think.

Spongebob closes his door and then there's a knock again

SpongeBob: I said...

It's actually Mr. Krabs and Squidward

Mr. Krabs: SpongeBob thank goodness you're here. The Krusty Krab has gone downhill. Please come back to be the fry cook again.

SpongeBob: You really hurt me. You said you loved me like a son and you straight up fried me for money.

Squidward: SpongeBob you know I hate you right?

SpongeBob: Yes.

Squidward: Well I hate the smell of burned Krabby Patties. Please come back to be the fry cook again.

SpongeBob: I'll think about it.

Mr. Krabs: What do you mean you'll think about it?

SpongeBob: I mean you have caused a lot of drama in the past. Breaking into my house for a penny. Driving Plankton to commit suicide. So I need time to think and if I want to come back, I'll let you know.

Mr. Krabs: If that's what you want, I'll allow it.

Mr. Krabs and Squidward leave

Gary meows at SpongeBob and it translates to \"Are you going back to work at The Krusty Krab\"

SpongeBob: I'll think about it Gary. I need some time.

A group of moms in Portland, Oregon, made international headlines in July for showing up to the city’s ongoing protests against racial injustice. The group, called the “Wall of Moms,” told the Washington Post that they felt compelled to join the demonstrations after seeing footage of the police killing of George Floyd in May. “When you’re a mom you have this primal urge to protect kids, and not just your kids, all kids,” Wall of Moms organizer Jennie Vinson told the Washington Post. “To see a grown man reaching out and calling for his mother—I think that was a transformational moment for so many of us. It’s like: What choice do we have but to do this?” The overwhelming media interest in this nascent collective of moms in Portland belies the fact that moms have always been an integral part of community organizing, especially around ending police violence. And it’s difficult to ignore that the #PortlandMoms are receiving international press coverage while other longtime organizer moms aren’t because many of the Wall of Moms participants are white.

But where do these deep-seated assumptions come from, and how has this particular representation of motherhood grown to dominate our popular imagination? If we borrow from feminist theory that motherhood, like womanhood, is a social construct, then it’s important to historicize its origins. The dominant understanding of motherhood in the United States is rooted in early America. Laurel Thatcher Ulrich, a historian of early America, writes in her 1991 book, Good Wives: Image and Reality in the Lives of Women in Northern England, 1650-1750, that while their Puritan forebears didn’t believe that mothers were capable of exercising the authority needed to raise Puritan children, early Americans developed a special place for mothers in the moral and religious education of their kids. This was evident during the revolutionary era, where mothers were charged with raising the children of a new American nation, who would secure the American experiment in republican governance. Mothers were expected to foster republican mores and manners in their children.

The concept of motherhood became further entwined with white, middle-class, republican ideals during the 19th century. In Modern Motherhood: An American History, women’s studies and history professor Jodi Vandenberg-Daves wrote, “Many people worried that in an increasingly commercial society, men would lose their moral bearings in the rough-and-tumble world of money.” Maintaining the virtues of the young republic thus fell to mothers, who were expected to tend to their homes away from the temptations of business and politics. The long duration of slavery in the United States also ensured that our modern understanding of motherhood is deeply racialized: Enslaved women were denied every right to nurture their children, and because the children of enslaved women were born enslaved, Black women’s reproductive capacity was highly commercialized in the interest of sustaining the institution of slavery. While enslaved women were appraised for their fertility, they were afforded no special status as mothers and, beyond rudimentary measures meant to ensure infant survival, were subjected to the same inhuman treatment as their counterparts.
A group of moms in Portland, Oregon, made international headlines in July for showing up to the city’s ongoing protests against racial injustice. The group, called the “Wall of Moms,” told the Washington Post that they felt compelled to join the demonstrations after seeing footage of the police killing of George Floyd in May. “When you’re a mom you have this primal urge to protect kids, and not just your kids, all kids,” Wall of Moms organizer Jennie Vinson told the Washington Post. “To see a grown man reaching out and calling for his mother—I think that was a transformational moment for so many of us. It’s like: What choice do we have but to do this?” The overwhelming media interest in this nascent collective of moms in Portland belies the fact that moms have always been an integral part of community organizing, especially around ending police violence. And it’s difficult to ignore that the #PortlandMoms are receiving international press coverage while other longtime organizer moms aren’t because many of the Wall of Moms participants are white.

But where do these deep-seated assumptions come from, and how has this particular representation of motherhood grown to dominate our popular imagination? If we borrow from feminist theory that motherhood, like womanhood, is a social construct, then it’s important to historicize its origins. The dominant understanding of motherhood in the United States is rooted in early America. Laurel Thatcher Ulrich, a historian of early America, writes in her 1991 book, Good Wives: Image and Reality in the Lives of Women in Northern England, 1650-1750, that while their Puritan forebears didn’t believe that mothers were capable of exercising the authority needed to raise Puritan children, early Americans developed a special place for mothers in the moral and religious education of their kids. This was evident during the revolutionary era, where mothers were charged with raising the children of a new American nation, who would secure the American experiment in republican governance. Mothers were expected to foster republican mores and manners in their children.

The concept of motherhood became further entwined with white, middle-class, republican ideals during the 19th century. In Modern Motherhood: An American History, women’s studies and history professor Jodi Vandenberg-Daves wrote, “Many people worried that in an increasingly commercial society, men would lose their moral bearings in the rough-and-tumble world of money.” Maintaining the virtues of the young republic thus fell to mothers, who were expected to tend to their homes away from the temptations of business and politics. The long duration of slavery in the United States also ensured that our modern understanding of motherhood is deeply racialized: Enslaved women were denied every right to nurture their children, and because the children of enslaved women were born enslaved, Black women’s reproductive capacity was highly commercialized in the interest of sustaining the institution of slavery. While enslaved women were appraised for their fertility, they were afforded no special status as mothers and, beyond rudimentary measures meant to ensure infant survival, were subjected to the same inhuman treatment as their counterparts.
A group of moms in Portland, Oregon, made international headlines in July for showing up to the city’s ongoing protests against racial injustice. The group, called the “Wall of Moms,” told the Washington Post that they felt compelled to join the demonstrations after seeing footage of the police killing of George Floyd in May. “When you’re a mom you have this primal urge to protect kids, and not just your kids, all kids,” Wall of Moms organizer Jennie Vinson told the Washington Post. “To see a grown man reaching out and calling for his mother—I think that was a transformational moment for so many of us. It’s like: What choice do we have but to do this?” The overwhelming media interest in this nascent collective of moms in Portland belies the fact that moms have always been an integral part of community organizing, especially around ending police violence. And it’s difficult to ignore that the #PortlandMoms are receiving international press coverage while other longtime organizer moms aren’t because many of the Wall of Moms participants are white.

But where do these deep-seated assumptions come from, and how has this particular representation of motherhood grown to dominate our popular imagination? If we borrow from feminist theory that motherhood, like womanhood, is a social construct, then it’s important to historicize its origins. The dominant understanding of motherhood in the United States is rooted in early America. Laurel Thatcher Ulrich, a historian of early America, writes in her 1991 book, Good Wives: Image and Reality in the Lives of Women in Northern England, 1650-1750, that while their Puritan forebears didn’t believe that mothers were capable of exercising the authority needed to raise Puritan children, early Americans developed a special place for mothers in the moral and religious education of their kids. This was evident during the revolutionary era, where mothers were charged with raising the children of a new American nation, who would secure the American experiment in republican governance. Mothers were expected to foster republican mores and manners in their children.

The concept of motherhood became further entwined with white, middle-class, republican ideals during the 19th century. In Modern Motherhood: An American History, women’s studies and history professor Jodi Vandenberg-Daves wrote, “Many people worried that in an increasingly commercial society, men would lose their moral bearings in the rough-and-tumble world of money.” Maintaining the virtues of the young republic thus fell to mothers, who were expected to tend to their homes away from the temptations of business and politics. The long duration of slavery in the United States also ensured that our modern understanding of motherhood is deeply racialized: Enslaved women were denied every right to nurture their children, and because the children of enslaved women were born enslaved, Black women’s reproductive capacity was highly commercialized in the interest of sustaining the institution of slavery. While enslaved women were appraised for their fertility, they were afforded no special status as mothers and, beyond rudimentary measures meant to ensure infant survival, were subjected to the same inhuman treatment as their counterparts.
In Impersonation, Heidi Pitlor, who previously published 2007’s The Birthdays and 2015’s The Daylight Marriage, uses ghostwriting as a means to explore how power dynamics shape relationships between women of differing classes as well as their experiences with motherhood and success. Allie, a ghostwriter, is a single mother with a useless boyfriend who struggles to make ends meet. Her big break was supposed to be her new job, which allows her to largely work from home to take care of her son, Cass, and gives her a sense of respect as she writes for celebrities, though she’s never able to say who exactly she’s writing on behalf of. As the storyteller, one might think that she’s the one in power, but time and time again we see the way that Allie is forced to give up pieces of herself to fill in and soften the narratives of the rich and powerful.

This dynamic becomes more obvious when Allie is tasked with writing a memoir on behalf of Lana, a lawyer, feminist icon, and future politician with signature cropped blue hair who finds herself speaking on shows like Ellen and taking part in activist movements around breastfeeding and mothering. Allie’s goal is to “feminize” Lana and to round out her image (and, therefore, make her more palatable to a wider audience) by focusing on the ins and outs of her experience with motherhood; it’s a goal that makes sense considering how much of Lana’s own work is about how poorly mothers are treated in our society and the limited resources available to make mothering easier, especially for marginalized mothers. But Lana isn’t willing to give much of herself up at all, something that becomes clearer the longer Allie works for her, and Allie soon learns that Lana’s closed-off nature might be due to the fact that Lana, given her wealth, hasn’t done much of the mothering at all. Instead, Lana hires and relies on a nanny to raise her son, Norton.
While I found the 2016 presidential election and its resulting impact to be an engaging plot point, I was much more invested in the minute details of Allie’s life. As a ghostwriter for wealthy clients, Allie is essentially playing at her dream of being a rich, successful, thriving woman as she, in reality, struggles with nearly every single aspect of her life: She’s one stroke of bad luck away from losing everything—one stunningly depressing moment takes place when her son, under the care of an elderly caretaker, eats six laxatives and she struggles with whether or not she can afford the ER trip. Allie’s a white mother raising a half-Indian child, and she wonders if she’s failing him by not giving him any Indian men to look up to. Meanwhile, Cass is a gentle soul, and he struggles to befriend the other boys, who push and taunt him.

In a world where Allie has the resources to take care of herself and her son, there would be more room for the two to discuss the ins-and outs-of misogyny and racism, but Allie just has to focus on survival. Everything else is a distraction. She’s a single mother who has to lean on the emotions of a landlord just to make sure she and her son don’t get kicked out of their small, messy house. Yet, she cringes when she’s called poor, saying she feels more comfortable with “broke.” And she’s a woman who wants to work with feminist subjects to both appease her own political and moral interests and to ease the less-than-feminist clients she’s written for in the past, forced to mask their own misogyny and, at times, violence (one client, we learn early in Impersonation, is accused of sexual assault by several women following the book’s publication, resulting in the book being scrapped and Allie losing massive amounts of money), to help them sell copies and help her pay her bills.

Another standout moment takes place when Lana shares her wild upcoming travel schedule. Lana sends a message to Allie, writing, “This is my life!” to which Allie almost responds, “You should see mine!” Instead, though, she types, “Lana, I need to tell you that my name is Allie, not Amy.” It’s the one thing she still has to reclaim considering the lack of work with her own name, voice, and story attached. Allie is constantly reckoning with what she’s giving up, something that feels like it’s constantly simmering across each page. Pitlor explores Allie’s emotional response to motherhood, to ghostwriting, and to her financial stresses, finding a balance between hopelessness and bitterness. Her exhaustion is symbolized in her inability to get through the single book she’s attempted to read for months; when she finally does have a single second alone to read in the bathtub, the book slips and sinks beneath the water.

Allie avoids taking Cass to the emergency room (so desperate is she to not fall further into debt); as a teenager, she temporarily becomes obsessed with the idea of becoming a dreadlocked woman and even names herself “Marley” (so desperate is she to become someone else); she writes a book for a man who is later accused of sexual assault by several women (so desperate is she to pay her bills). She softens stories that maybe shouldn’t always be softened, and she lets moments slide where she should have stood strong in her beliefs. But this is largely the result of a lack of true agency and power. What can a woman and a mother with no money afford to say no to? We all have choices, but we don’t all have the same ones. Ultimately, Impersonation asks who we expect women to be in order to be real feminists, and if it’s possible to maintain the supposed tenets of feminism when you’re dead broke.



The last few weeks have seen Virginia racked by government scandals, including Democratic Gov. Ralph Northam and Attorney General Mark Herring’s histories with blackface, and allegations of sexual assault against Lt. Gov. Justin Fairfax. Democratic Party leadership has since swiftly called for the resignations of Northam and Fairfax — demands that some on both sides of the aisle have ignorantly all but chalked up to excessive “political correctness.”

We’ve seen this before: appropriate backlash against intolerant, highly inappropriate behaviors and language is criticized and dismissed, all while normal or harmless language—often used by marginalized people—draws overblown, disproportionate outrage. Last month, in the wake of a faux outrage storm generated by Rep. Rashida Tlaib’s comments referring to President Trump as a “motherfucker,” a report exposed a troubling disparity in how controversial comments are covered: Tlaib’s explicit words threatening to impeach Trump had received five times more media coverage than Rep. Steve King’s defenses of white supremacy later that week had.

Certainly, Tlaib’s word choice seemed to draw more ire from some than the president’s racist, lie-filled address defending his proposed border wall, as well as his decision to hold the government hostage at the expense of quite literally everyone. And many of those who criticized Tlaib were the very same people who have shrugged off the president’s own seemingly endless list of profanities, often used in explicitly racist, sexist or otherwise bigoted contexts.

This is a common pattern: The same actors and institutions that decry “political correctness” and label demands for basic respect for marginalized people as attacks on free speech simultaneously hyper-police the language and behaviors from some groups and not others. These double standards strike at the core of what criticism of “PC culture” ultimately embodies: deep resentment of societal progress—specifically, progress that increasingly empowers people who have long been expected to shoulder their oppression in silence to speak up and ask for respect. And, as Tlaib demonstrated, they are increasingly speaking up on their own terms.

Popular narratives around the supposed excesses of political correctness tend to focus on language that now can’t be said, such as racist, homophobic, transphobic or misogynistic slurs. But make no mistake: the anti-PC culture’s outrage is ultimately directed at what now can be said—by marginalized people.

Late last month, on the latest stop of a comeback tour no one asked for, self-identified comedian Louis CK made a slew of “jokes” exemplifying this resentment at shifting cultural norms. CK criticized today’s generation for having the nerve to listen to and respect the pronouns of transgender and non-binary people. “They’re like royalty,” CK said of trans and non-binary people, a demographic that consistently experiences higher homicide and suicide rates than any other group. “They tell you what to call them. ‘You should address me as they/them. Because I identify as gender neutral.’ Okay. You should address me as ‘there,’ because I identify as a location. And the location is your mother’s c-nt.”

In addition to mocking and trivializing the experiences of trans and non-binary people, it was impossible not to draw a connection between CK’s critique of purported, societal hyper-sensitivity and his own treatment of women. In 2017, CK admitted to sexually harassing and masturbating in front of several women, and said he would  take a break from comedy. Suffice to say, it was a short-lived break. CK quickly made a return and almost immediately framed himself—and not the women he had admitted to abusing—as the victim. CK’s self-victimization complex was starkly emblematic of the power dynamics that define our understandings of “political correctness”: somehow powerful people who face accountability for abusive behaviors are victims, and those whom they oppress are the real  oppressors, simply for asking for better treatment.

We hear so much about the importance of preserving “free speech” in the context of people with privilege no longer being able to say and propose awful, dehumanizing ideas and tell cruel and bigoted “jokes.” But so rarely do we hear praise of a broad, mounting cultural shift toward inclusivity, thoughtfulness, respect, and safety as something that helps promote greater access to free speech by marginalized people. Groups that have previously been expected to accept oppression and bigotry as inherent to existence without a word of complaint or option for recourse have become increasingly empowered to respond to comments and actions that perpetuate their oppression by saying how they feel. They utilize their free speech rights to respond to bigotry with such comments as, “that demeans me,” “that hurts me,” or “think about what you’re saying.”

And they utilize their free speech rights to speak up about their experiences with oppression.

And while critiques of “political correctness” imply their softness and sensitivity, many of the realities that women, people of color, and LGBTQ people speak up about—only to be routinely mocked, dismissed, and verbally or physically attacked for doing so—are at their core matters of survival and the ability to participate in public life: From pro-choice activists speaking up about rising maternal death rates and anti-choice violence, to Black Lives Matter activists speaking up about how police violence and the racist criminal justice system are quite literally killing them. The systematic dismissal of marginalized people’s voices and demands for respect often implicitly contributes to violent outcomes that persist on a daily basis for marginalized communities.

Discussions about political correctness often center around free speech, with the implication that free speech applies to some people—those with power and privilege—and not others. It’s incumbent on all of us to shift the conversation, and talk more about how to protect the free speech and voices of marginalized people, whose demands for basic respect too often remain the butt of jokes.
Walking down the hallway at school, an administrator stopped me in my tracks. I felt her eyes glare from the top of my head, past my torso and down my legs. She told me that my shorts were too short and that she didn’t want to see me wearing them ever again. I felt embarrassed and shaken, and for the rest of the day, I wondered if her impression of me had changed simply because of the shorts I was wearing.

My experience isn’t unique. Thousands of girls have similar stories of being pulled out of class or stopped by an administrator  because of what we look like. The plain truth is that Black girls are disciplined because of dress code violations much more frequently than our white peers are, and often face much harsher consequences.

And last month, Secretary of Education Betsy DeVos endorsed this discriminatory discipline by revoking President Obama’s Rethink Discipline guidance — essentially giving school administrators the green light to criminalize students of color.

To be clear, this decision doesn’t change the law, but it sends a disturbing message to students: Your government doesn’t care about creating welcoming, safe learning environments for all students.

In May, I co-authored Dress Coded: Black Girls, Bodies, and Bias in D.C. Schools with the National Women’s Law Center because I wanted to shine a light on how dress codes single out girls as objects of discrimination and contribute to pushing us out of school. I was excited that officials from the U.S. Department of Education granted our request to talk about the report and learn how they could ensure Black girls feel welcome and respected in school. In our meeting, I asked them to commit to preserving the Rethink Discipline guidance, which addressed unfair disciple in school. They agreed that disproportionally disciplining students of color is a problem and expressed concern about students losing classroom time. I believed they would make things right. Clearly, I was wrong.

Black girls are six times more likely to be suspended than their white peers. And in some states like the District of Columbia where I live, Black girls are 20 times more likely to be suspended than white girls.

The frequency of suspension is not because we misbehave or disrupt the learning of our peers more, but because Black girls are punished for minor and non-existent offenses, like dress or hair code violations. Stereotypes that influence the way teachers see and respond to students of color lead to severe disciplinary action that is often uncalled for. For example, society has learned to sexualize the curves and bodies of Black girls. As a result, teachers feel the need to “save” or “protect” Black girls from their perceived sexuality, which often comes in the form of being sent to the principal’s office for wearing a tank top or daring to bare your shoulders. Black girls are also punished for reasons such as “talking back” or “being loud,” which feeds into the angry black girl stereotype. We’re even punished for having experienced sexual harassment or violence because Black girls aren’t seen as victims.

That’s why the Obama Administration’s Rethink Discipline guidance was necessary. And it’s why the DeVos Department’s decision to remove its support for that guidance is so devastating.

There’s one small silver lining though. The guidance documents still exist, even though the Department has stepped away from them. Schools should still use them to reshape their discipline policies. And students should hold their schools accountable for discriminating against Black girls.

Girls at my school drafted an alternate dress code and met with administrators to negotiate this new policy. When they refused to take us seriously, we protested. My classmates spoke up about their negative experiences with the dress code — from feeling sexualized by our own teachers to being taken out of important class time to change clothes. We also laid out ways to change enforcement, so it doesn’t target Black girls. And we won. Our school finally agreed to adopt our proposed changes and implement a new system of dress codes that will no longer target Black girls.

I know I’m not the only one who believes that schools need to rethink discipline. There’s a whole movement of students, parents, teachers, and administrators behind me. We believe all students deserve to learn free from discrimination and stereotypes. If Betsy DeVos won’t champion that cause, we will.

Fatimah Fair is a student activist and co-author of Dress Coded: Black Girls, Bodies, and Bias in D.C. Schools. She graduated from DC’s School Without Walls High School in spring 2018 and currently attends Lafayette College. She is joined by 200 students from 14 states and the District of Columbia who believe schools should rethink unfair discipline policies that contribute to school pushout.Soon after Anna Holmes took on the job of building the website Jezebel, in 2007, she set it apart from established publications like Vogue and Elle with a post offering $10,000 to anyone who would send in the best unretouched version of a women’s magazine cover photo. And with that, Jezebel had marked its territory: feminist cultural criticism, with an edge.

“It seems quaint now, because there are tons of media outlets influenced by Jezebel,” Ms. Holmes said. “But at the time, there was no proof that it was marketable.”

Within three years, Jezebel had surpassed its sibling publication, Gawker.com, the flagship site of Gawker Media, in monthly page views. Ms. Holmes said she wasn’t fully aware of her site’s success until it was parodied on NBC’s “30 Rock” as JoanOfSnark. “It’s this really cool feminist website,” Liz Lemon, the protagonist played by Tina Fey, says. “Women talk about how far we’ve come and which celebrities have the worst beach bodies.”

In the aughts and the earlier part of this decade, other online feminist publications sprang to life — Feministing, The Hairpin, The Toast and many others — covering everything from paid leave to the Kardashians in a conversational voice that was sometimes rude, sometimes funny and never didactic.

Now many of those sites are dead or dying, and Jezebel is under new management, part of a stable of publications run by the hedge fund-controlled ownership group, G/O Media, that recently set off a staff exodus at the sports site Deadspin. Feminist media has been especially hard hit by the financial turbulence in the news industry.

Samhita Mukhopadhyay, a former executive editor of Feministing and now the executive editor of Teen Vogue, said she missed the years when those publications were connecting with readers, calling it “the heyday” of independent feminist media.“It was this amazing moment where we were making careers out of blogging in our underwear. Now it’s not a good time for start-up media,” she said, adding, “I worry that people are afraid to align themselves with publications that are explicitly feminist.”

The gradual collapse has continued into this year. Feministing, an independent blog founded in 2004, plans to shut down in the weeks to come. At its peak, the site had 1.2 million unique monthly visitors, with most revenue coming from ads and reader donations. The co-executive editors, Lori Adelman and Maya Dusenbery, said Feministing helped popularize the term “slut shaming,” ran early interviews with chart-toppers like Lizzo and pushed for coverage of Gamergate, a cybermob that targeted women.

“It was unclear how we could have such a ferocious audience and not be onto something,” Ms. Mukhopadhyay said. “Many of us involved in the feminist blogosphere are now in mainstream media, and that’s exciting. That said, we need independent media because they’re an important check.”

The Establishment, an independent blog focused on gender and race, stopped publishing in April with a farewell post bemoaning the “Sisyphean” difficulty of making money with a site focused on “intersectional feminist media.” In May, Vice Media’s women’s site, Broadly, was folded into the larger Vice brand.

The Hairpin, with recurring features like “Ask a Queer Chick” and “Interview With a Virgin,” shut down last year, as did Lenny Letter, the newsletter and website started by Lena Dunham and her producing partner, Jenni Konner. Rookie Magazine, the diarylike site started by the fashion-blogger-turned-actress Tavi Gevinson when she was 15, also ended its run. XoJane, known for first-person essays like “My Rapist Friended Me On Facebook (And All I Got Was This Lousy Article),” signed off in 2016.

The closings have come at a time when even digital giants like BuzzFeed and Vox have made adjustments to navigate the increasingly turbulent digital media business.

“As the media industry is grappling with different issues, it’s these feminist publications that are shuttered first,” Lindsay Schrupp, the former editor in chief of Broadly, said. “It contributes to the long history of erasing women’s work.”The Frisky is still around (sort of), but it has lost its old identity under its new owner, Nebojsa Vujinovic, a Serbian music producer. Recent headlines on the site include “Justin Bieber Has a New Tattoo!” and “Meghan Markle and Adele Had a Secret Meeting!” That’s a long way from the mix of political and sharp lifestyle coverage that filled the welcome page before the sale.

Molly Elizalde, the former editorial and creative director of Lenny Letter, said she had recently tried to help a female journalist place an essay, only to realize, “There’s a huge hole.”

To some degree, the sites were undone by their own popularity. Larger media organizations like The New York Times, The Washington Post and Condé Nast took notice of the rising generation of women journalists — and hired them. (The Times hired gender editors in 2017; The Washington Post has a gender columnist and a product called The Lily that is targeted at women.)

And with the rise of the #MeToo movement, the concerns of the scrappy upstarts became the stuff of prizewinning investigations conducted by major news outlets. At the same time, women’s glossies at the big magazine publishers absorbed elements of that voice, a sensibility that also informed television series like “Fleabag” and “Broad City.”

“A lot of these closures were less about any sort of failure and actually about our success,” Ms. Schrupp, the former Broadly editor, said. “These places became so successful at showing women’s experiences as full, real experiences that other companies had to keep up. But it’s sad that they’re the ones who suffer for it.”

Ms. Holmes noted the change that has taken place since the early days of Jezebel, when her use of the word “feminism” in an early memo “set off alarm bells” at Gawker Media, as did her posting of a story on menstruation.

Editors may have also adjusted their view of which stories are right for women’s publications. Stella Bugbee, the editor in chief of The Cut, the popular site that is part of New York Media, said web data shows that a reader interested in beauty products will also click on a political story. So The Cut runs “The Body Politic,” a column by Rebecca Traister, the author of “Good and Mad: The Revolutionary Power of Women’s Anger,” alongside one by Daise Bedolla called “Why Is Your Skin So Good.“I don’t think of us entirely as a women’s publication,” Ms. Bugbee said. “My main agenda for The Cut has always been to create an environment where women can hear themselves think, and those thoughts aren’t dictated by gender, necessarily.”

Historically, Ms. Traister said, it “has never blown anyone’s mind” that a newspaper subscriber would be interested in two things at once — say, stocks and sports — because the reader, presumed male, was understood to have varied interests.

“The integration of feminist political commentary and investigative reporting with other stuff, whether it’s fashion or beauty or sports, is part of a necessary expansion of the mainstream media to include women as full human beings,” Ms. Traister said.

Hanna Rosin, a co-founder of Slate’s DoubleX vertical, described Jezebel and other early women’s blogs as “lady spaces where people get rowdy.” That rowdiness, Ms. Rosin said, has largely been traded for the landmark investigations published by large publications able to afford the cost of having reporters and editors focus on a single story for months at a time. She cited the articles on Harvey Weinstein in The Times and The New Yorker as “earth-shattering,” adding that they were made possible thanks to the “coming of age” of women’s media.

But some journalists from the early wave worry that the voice of the feminist blogs has been diluted on its way to the mainstream.

“I remember The Washington Post started this women’s blog and it was in lipstick font,” said Jessica Valenti, who co-founded Feministing with her sister, Vanessa Valenti. She was referring to a site called She the People that the Post started in 2012 whose logo had a lipstick underline. “I was like, ‘Ugh, this is what happens when mainstream publications try to take on an insurgent young thing.’”

Julianne Escobedo Shepherd, the current editor in chief of Jezebel, concurred, saying, “There’s an edge that feminism brings to coverage. And it naturally will get softened when it’s no longer run by the feminists it’s targeting.”

Despite the recent shutterings, the particular voice of the feminist blogs has not disappeared. The godmother of them all, Bust, started as a ‘zine by Debbie Stoller and Laurie Henzel in the Riot Grrrl days, is hanging in there 26 years after its founding. The magazine’s motto — “For women with something to get off their chests” — sums up an ethos that seems unlikely to die, no matter what troubles come for the media industry.
Another batman film. Anyone else bored of superhero movies? I've never been a big fan of the whole superhero thing anyway, maybe thats why I don't get the hype around it all... Plus i'm a grumpy old git trapped in a 32 year olds body. 😂
A guy with a van towing a mobile hot dog trailer has got himself wedged in Walton side 🤦‍♀️
He is so wrong and very disappointed with him. Think game has gone to his head and he needs a reality check.
Totally wrong Not like Boris to lie...PREORDER CURRY DELIVERY Despicable article by the Daily Mail, twisting a story to try and wring a benefit-scrounging immigrant single mum  angle out of it.
Basically, a Czech-born mother of 3 (British) kids applied for universal credit to tie her over after her relationship broke up. Her application was rejected and as a result she and her kids had to rely on food banks and were almost made homeless. Thankfully she managed to find a cleaning job to keep her going and is in the process of sorting … See More
We have been surviving off my wages .. 20 hrs a week as a classroom assistant as hubby not been working since lockdown and as a self employed person he didnt fall into the grant or furlough scheme .. As I earned just over £1000 a month he hasnt been en… See More
Homemade lemon sponge with a lemon buttercream icing.  My husbands favourite type of cake
Henifer is a happy hen.David Edwards
game hen cross. Came all the way from Germany. My mate gave me her. Just a pet hen that likes fuss.Do any of my friends live in Nottingham?Hey guys 🙂 Don't suppose you could give me an idea of nice areas/areas to avoid on the outskirts? XxxIf you're looking to buy a house, consider property prices vary a lot. My sister said she'd love to live in Ruddington, but couldn't afford it!
Where she is in Clifton is very much an old council estate, but most of the neighbours are lovely. The houses are pretty big, but parking is tight!
I haven't any experience with the rest of Notts, and it's quite a big place!don't avoid the sloppy joe at brown bettysWell worth the calories!! 🍫☕🍬Can anyone remember Manlove Bakery on the corner of Station St and George St? They did the most amazing doughnuts.Christmas this year will be spent on holiday and probably alone for most of it but I'm looking forward to me time.You never stop! Might not be everyone’s idea of Christmas but it sounds like it could be a treat for you The village of Tutbury, is popular for day trippers who come to savour its unique castle. Mary Queen of Scots was incarcerated here in the 16th century, and it It's rev ganz around 1983-84 escorting the Richard Wakefield school children up to church back then as the school is connected to the church of England so we used to go up to the church often as kidshas developed a reputation as one of the most haunted places in Britain.… See MoreAnyone remember this? Thoughts?The village of Tutbury, is popular for day trippers who come to savour its unique castle. Mary Queen of Scots was incarcerated here in the 16th century, and it has developed a reputation as one of the most haunted places in Britain.… See MoreAnyone remember this? Thoughts?We’ve all missed so much over the last few months – birthdays, anniversaries and date nights – but now you can enjoy a meal out on Mondays to Wednesdays throughout August with the Eat Out to Help Out initiative. Receive 50% off food and soft drinks. Why wait until the weekend? 😋Must be some mistake Barton and Branston don’t have an Aldi! Hasn't done anything yet.Didn’t we all say he’d feck off as soon as Brexshit was done? Off to his massive PM pension Dahlia: OMG look at his silly hair!!! When we lived in the shop at Gresley, there was this really dirty chav family. One day the mother came in the shop and picked me up. I was about three. I said \"Put me down my Mummy says you smell!\" I still get reminded about that now 🤣 🤣🤣🤣

You never realise how much/little TV you watch until you fill out a list. Put a ❤️ by the shows of which you have watched more than 5 episodes.

Finally got myself an actual bedframe and larger mattress so hopefully my back will appreciate it over the sinking, stacked single mattresses I was sleeping on before. Thank you Jake
 for helping disassemble, move, and then reassemble it. 🙂

 Somewhere between that and starfishing the entire thing because of the extra space 😅
 Say hello to your high street and support local shops and restaurants.

 Over the past 10 years or so, there has been increasing interest in teaching children and women to ‘spot the signs’ of grooming. This article will explain why this approach doesn’t work, and why grooming should be reframed as a common, normal human behaviour that we all engage in.
 Also see: manipulation. It is a survival trait of humanity, not a naturally negative behaviour. Teaching critical thinking and boundary setting and looking at impact of behaviours are more helpful than teaching people to spot specific signs.

 now that everyone who hates you is watching your every move, and your success hurts them to watch.
Moving on, being happy, being successful and being yourself makes your haters so fuckin mad lol

oh, sweetheart. That is so true, but is a hard-won truth. You’ve paid for that knowledge and I salute you. (yes, wine was involved in this comment, bit without wine I might not have had the courage to say it :-))

There’s no such thing as ‘resilience’ when it comes to abuse - only endurance.

Ironically it was resilience that meant I escaped though. To be resilient, you actually need to be vulnerable. I wasn’t, I was strong, stoic, so I stayed. As soon as I reached out for help, saying I’m not ok, I got my resilience back, and my resolve to… See More

Seriously, what is people's fascination with that fucking corner and why do they always, without fail, feel the need to be obnoxiously loud pricks while they're hanging around there. Nearly an hour now and these cunts still haven't fucked off. I can smell the childhood neglect, lack of education, and overpowering Lynx spray from here. Go to a fucking park, or better yet, do us all a favour and go play with the traffic.

I change my look far too often, so it's alright. 😅 Ehh, I do it a little still, but nowhere near as much as I used to. I'm starting to get back into it a bit more now things are a bit more stable mentally.

Dear Friends, yesterday was a sad day for our lovely parish of Outwoods. The application for the 322 houses, car parking, roads, 2 x substations and a gas governor was passed.There are a few very minor amendments but it has the go ahead.
Two Anslow residents spoke against it as did I on behalf of Outwoods Parish Council but the meeting started with it being recommended by the Planning Officer.
Neither of our Borough Councillors troubled themselves to send in written comments or to speak at the meeting. They are allowed 6 minutes each when.
They are paid councillors and I am not so if I can turn up to speak, why can't they turn up to speak on behalf of the people that voted for them. They did not put in any written comments either. We need active councillors in Outwoods.

 have done my best to respect the diverse opinions regarding COVID-19 over these past few months, but I have these nagging questions about it... (copied status)
Please just take politics out of it and read this with an open mind using common sense.
Anyone out there who can tell me what our end game is with the covid 19?
What is the magic formula that is going to allow us to sound the all clear?
Is it zero cases?
The only way that will happen is if we just stop testing and stop reporting.
Is it a vaccine?
It took 25 years for a chicken pox vaccine to be developed.
The smallpox inoculation was discovered in 1796 the last known natural case was in 1977.
We have a flu vaccine that is only 40 to 60% effective and less than half of the UK population choose to get one, and roughly 20,000 British will die of the flu or flu complications.
Oh, you'll mandate it, like other vaccines are mandated in order to attend school, travel to some foreign countries, etc.
We already have a growing number of anti vaxxers refusing proven, tested, well known vaccines that have been administered for decades but aren’t necessarily safe!
Do you really think people will flock to get a fast tracked, quickly tested vaccine, whose long term side effects and overall efficacy are anyone's best guess?
How long are we going to cancel and postpone and reconsider??
What if October's numbers are the same as August's?
You moved football to summer?
What if next March is worse than this one was?
When do we decide quality of life outweighs the risks?
I understand Covid can be deadly or very dangerous for SOME people, but so are peanuts, strawberries, and so is shellfish.
We take risks multiple times a day without a second thought.
We know driving a car can be dangerous, we don't leave it in the garage.
We know the dangers of smoking, drinking and eating fried foods, we do it anyway.
We speed, we don't fasten our seatbelts.
Is hugging Gran really more dangerous than rush hour on the motorway?
Is going out with friends after work more risky than 4 day old petrol station sushi?
Or operating a chainsaw?
When and how did we so quickly lose our free will?
Is there a waiver somewhere I can sign that says, \"I understand the risks, but I choose a life with Hugs and Smiles, and the Community Fair and Concerts and Parties.\"
I understand that there is a minuscule possibility I could die, but I will most likely end up feeling like crap for a few days.
I understand I could possibly pass it to someone else, if I'm not careful, but I can pass any virus onto someone else.
I'm struggling to see where or how this ends.
We either get busy living or we get busy dying.
When God decides it's your time, you don't get any mulligans, so I guess I would rather spend my time enjoying it and living in the moment and not worrying about what ifs and maybes, and I bet I'm not the only one.
(I copied this from a friend. Feel free to do the same.)

Do us a favour and resign !!!
";
    }
}
