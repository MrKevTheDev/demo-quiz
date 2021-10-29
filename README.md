# Demo Project (PHP/mythraljs)

Hi and welcome to my demo project named The questions are made up and the answers make no sense, hope you enjoy the
concept I did giggle while I made it. This is one evening of work about 5h including right up.

### The goals of this project in order of completeness.

1. Make a small quiz app in mithril js and PHP.
2. Generate random questions.
3. Demonstrate OOPeness and extendability.
4. Demonstrate component-based Js using mithril.
5. Use different methods for collecting text.
    1. VAR
    2. FILE
    3. STREAM

6. Optimize for performance.
7. DevOps things.

I used Lumin and mithril to make a smallish footprint app and did the all the mithril work in one page index.blade.php .

To generate random questions I used Markov tables a "random" process where the chance depends on the state of the
previous, this works with words because we can calculate the chance of human words, the code isn't optimal but works.

While working I tend to use SMART goals, although sometimes slower it lows me to improve and iterate over a project for
example there is a genarateFromText in the function Markov class this was the 1st situation hover this will have led to
class creep if I wanted to progress the project. so breaking the project up into a generator and reader.

I use an abstract class to hold the default process for generating text as that old be shared functionality, and will
late me optimize in one place, and the interface ensures the data going into the reader is set.

The js on theis app is small and not that compacted it has 3 parts a loader component , form component and a list
component.

I didn't complete the file system or stream classes , but by using smart goles we still have a working app and something
to demonstrate .

Optimizing for performance was not completed, however, I would start by reckoning it s Big-OOO, so just looking over it
you see can there are points where we have exponential complexity, with that in mind I should optimise that 1st and the
logarithmic complexity in the generator function can be normalised by applying a simple sorting.

Replace them (do/whiles) with for loops and function calls with operands" if I wanted a and "quick win"

Docker compose sold work however docker on windows is bad.

- `docker-compose run --rm composer update`
- `docker-compose up -d --build site`

if its not working use

- `php composer update`
- `php -S localhost:8000 -t public` 
