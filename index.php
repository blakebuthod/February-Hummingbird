<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="content-type" content="text/html">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="local style.css">
    <title>February Hummingbird</title>
</head>
<body>
    <a href="about.html"><img id="info" src="my-icons/info.png"></a>
    <?php
        echo <<<END
            <form action="$_SERVER[PHP_SELF]" method="post">
END;
        function beginning() {
            echo <<<END
                <div class="beg-logo">
                    <img id="#beg-logo" src="logo/fhb logo.png" alt="February Hummingbird logo">
                </div>
                <div class="content beginning">
                    <h2>February Hummingbird</h2>
                    <p>An interactive story.</p>
                    <input type="hidden" name="stage" value="start">
                    <input class="button" type="submit" value="Begin">
                </div>
            </form>
END;
         }
        function post_question($number, $answer) {
            // Background colors based on favorability of outcome
            $green = '#cfe8d5';
            $yellow = '#f3f0d3';
            $red = '#f4cfd4';
            
            // List of answers
            $a1 = 'Get off the train in Kansas City';
            $a11 = 'Confuse possible follower';
            $a111 = 'Mandarin Orange';
            $a112 = 'Burrito';
            $a113 = 'Mango';
            $a1131 = 'Help Chihuahua';
            $a1132 = 'Help nearby teenage girl';
            $a1133 = 'Help the fruit vendor';
            $a1134 = 'Save yourself';
            $a114 = 'Papaya';
            $a1141 = 'Take the paper';
            $a11411 = 'Ask';
            $a114111 = 'No';
            $a114112 = 'Yes';
            $a11412 = 'Apologize';
            $a114121 = 'Ask for your significant other’s email password';
            $a114122 = 'Ask how you will die';
            $a1142 = 'Demand papaya';
            $a115 = 'Lemon';
            $a1151 = 'Lose your nerve';
            $a1152 = 'Take a bite';
            $a11521 = 'Walk away';
            $a11522 = 'Yell at him';
            $a116 = 'Apple';
            $a1161 = 'Ask the vendor to hand you one';
            $a1162 = 'Take an apple yourself';
            $a117 = 'Peach';
            $a1171 = 'Remain silent';
            $a11711 = "Don't dare";
            $a11712 = 'Dare';
            $a118 = 'Coconut';
            $a119 = 'Banana';
            $a1191 = 'Return to your boring life';
            $a1192 = 'See how deep the rabbit hole goes';
            $a11921 = 'Flight';
            $a11922 = 'Fight';
            $a119221 = 'Eggs';
            $a119222 = 'Sword';
            $a1192221 = 'Stop fighting to apologize for assuming the gorilla’s gender.';
            $a1192222 = 'Stop fighting. You can’t hit a girl.';
            $a1192223 = 'Keep fighting';
            $a12 = 'Just go home';
            $a121 = 'Decline politely';
            $a1211 = 'Get on the train';
            $a122 = 'Eat waffles';
            $a2 = 'Continue to Birmingham';
            $a21 = 'Conform';
            $a22 = 'Demand an explanation';
            $a221 = 'Hack to distraction';
            $a222 = 'Go home';
            $a3 = "Ask that old man why he's staring at you";
            $a31 = 'Stop talking to him';
            $a32 = '"The way I smell?"';
            
            echo <<<END
                <nav>
                    <ul>
                        <li><a href="javascript:history.go(-1)"><img src="my-icons/back.png" alt="back icon"></a></li>
                        <li><input id="restart" type="image" name="stage" src="my-icons/restart.png" value="-1"></li>
                    </ul>
                </nav>
                <img id="logo" src="logo/fhb logo.png" alt="February Hummingbird logo">
                <div class="content">
END;
            if ($number == 'start') {
                echo <<<END
                    <p>You wake up, your face smushed against a train window. You don’t remember who you are or why you’re on this train, so you take deep breaths and try to gather any available information. Your ticket says you left Denver, Colorado, with a final destination of Birmingham, Alabama. The date on the ticket tells you this is February, but out the window it looks sunny and green, as if it were summer. Probably global warming. Darn atmosphere.<br><br>
                    You hear an announcement that the train is about to stop in Kansas City. You have a strong gut feeling that you live there.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a3">
                        <input class="button" name="answer" type="submit" value="$a2">
                        <input class="button" name="answer" type="submit" value="$a1">
END;
            } elseif($answer == $a1 OR $answer == $a1211) {
                echo <<<END
                    <p>You get off the train and just start walking, no specific destination, hoping something will strike you as familiar. And it does. Each building you pass makes you more and more certain that you truly do live here. You feel the keys jingling in your pocket, and, examining them, suddenly remember your house, a red duplex. You can almost smell the tar on your driveway.<br><br>
                    It’s a relief to remember this, but something still feels off. You feel as though someone is watching you. Most likely you’re just being paranoid because of whatever events you’ve forgotten which led you to get on a train in Denver.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a12">
                        <input class="button" name="answer" type="submit" value="$a11">
END;
            } elseif($answer == $a11) {
                echo <<<END
                    <p>You duck into a farmer’s market just in case you are being followed, but then you stop in your tracks, mesmerized.<br><br>
	That is the most appealing array of fruit you have ever seen. It’s as if you cannot draw your eyes away. There’s a towering pyramid of apples balanced atop one another, their dappled yellow-red flesh shining like a sunset. There is a sweet, faintly musky scent coming from the papayas. The skin of the peaches seems no thicker than a sheet of tissue paper, barely concealing their soft flesh. The mandarin oranges with their pocked peels are plump, promising juice.  The bunches of bananas are perfectly ripe, neither green-tipped nor speckled with brown. Somehow even the fruits you don’t usually eat seem appetizing, the sharp, refreshing smell of the lemons, the hairy coconuts the size of your head. The mangoes’ gold and crimson skin showed faint wrinkles, indicating they are ready to eat. And at the end of the table, a little carton of burritos, plump and fragrant in their tortillas.<br><br> 
	You reach into your pocket and find a dollar. You can buy one fruit. Which do you choose?</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a119">
                        <input class="button" name="answer" type="submit" value="$a118">
                        <input class="button" name="answer" type="submit" value="$a117">
                        <input class="button" name="answer" type="submit" value="$a116">
                        <input class="button" name="answer" type="submit" value="$a115">
                        <input class="button" name="answer" type="submit" value="$a114">
                        <input class="button" name="answer" type="submit" value="$a113">
                        <input class="button" name="answer" type="submit" value="$a112">
                        <input class="button" name="answer" type="submit" value="$a111">
END;
            } elseif($answer == $a111) {
                echo <<<END
                    <script>
                        document.body.style.backgroundColor = '$green';
                    </script>
                    <p>You purchase a Mandarin orange and realize this is an ideal time to show off your best talent: peeling it in one go. You peel the orange in a slow spiral, careful not to make it too thin. The vendor applauds, impressed. Other shoppers are watching, too. One girl is even filming you on her cell phone.<br><br>
                    <div class="ending">
                        You become a viral sensation for best orange-peeling ever.</p>
END;
            } elseif($answer == $a112) {
                echo <<<END
                    <script>
                        document.body.style.backgroundColor = '$red';
                    </script>
                    <p>You hand the vendor a dollar bill, pointing to the burrito, and the vendor’s rosy-cheeked face splits into a wide grin. He takes the dollar, folding it neatly into his pocket, and allows you to choose your burrito. You take the nearest one, the first burrito to catch your eye.<br><br>
                    It was not a burrito. It was never a burrito. Oh God. Oh God.<br><br>
                    <div class="ending">
                        Oh God Oh God it’s not a burrito</p>
END;
            } elseif($answer == $a113) {
                echo <<<END
                    <p>“Could I have a mango?” you ask.
	The vendor accepts your dollar and hands you the fruit.<br><br>
	Just then, there is a boom from a couple of stalls over. You drop to the ground, smelling—burnt popcorn. There’s a fire in the kettle corn stand, and it’s huge, feeding on the grease and electricity.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a1134">
                        <input class="button" name="answer" type="submit" value="$a1133">
                        <input class="button" name="answer" type="submit" value="$a1132">
                        <input class="button" name="answer" type="submit" value="$a1131">
END;
            } elseif($answer == $a1131) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$yellow';</script>
                    <p>One woman, fleeing, dropped your purse, and the Chihuahua trapped inside it. From your vantage point on the ground, you are on eye level with it, and feel that you are communicating across species boundaries. The dog is asking—nay, begging—you to save it. You crawl forward and grab the purse handle, then turn and run from the market.<br><br>
	You stop a few streets away and unzip the purse, reaching in to comfort the dog. It bites you with its needle-sharp teeth and squirms out of the bag, disappearing down the street.<br><br>
                    <div class="ending">
                        Unappreciated hero</p>
END;
            } elseif($answer == $a1132) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$green';</script>
                    <p>A girl with a knit beanie pulled low over her face is lying down, eyes closed. You think she may be unconscious. Still, her phone is clutched tight in her hand. You slide your arms under her back and knees and lift her, surprised at how light she feels—it’s probably the adrenaline. You carry her a safe distance away and set her on the ground, trying to be gentle with her head. There, a paramedic takes over.<br><br>
	The girl makes a full recovery. Her phone was videotaping the whole time, capturing the rescue.<br><br>
                    <div class="ending">
                        You go viral as a hero</p>
END;
            } elseif($answer == $a1133) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$green';</script>
                    <p>All those carefully-balanced piles of fruit have fallen on the fruit vendor. You leap up and dig through it to pull him out. But it’s as if he has disappeared. You consider just running away, but it’s as if you are stuck in a loop. Your arms just keep digging, tossing fruits behind you. And then you see something—a tiny arm, as if from a Barbie doll. You remove the mango atop it and see the fruit vendor. Except that somehow he is now only about 8 inches tall. You don’t understand, but you scoop him up and carry him away from the spreading fire.<br><br>
                    You stop running a few streets away and raise the tiny vendor in your hand to face level. He is pointing down. You set him on the ground. Before your eyes, he grows back to normal size. He is as silent as ever. He shakes your hand and walks away down an alley. For the rest of your life, you never seem to lose anything—not your keys, your socks, your children.<br><br>
                    <div class="ending">
                        Blessed with luck</p>
END;
            } elseif($answer == $a1134) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$red';</script>
                    <p>You scramble up from the ground and run away from the market as the fire spreads from stall to stall. You keep running until you are a few streets away, then fall against a wall, panting. When the report comes on the news that night, saying how many people died in the fire, you turn it off. You can’t face yourself.<br><br>
                    <div class="ending">
                        Wracked with guilt</p>
END;
            } elseif($answer == $a114) {
                echo <<<END
                    <p>You ask for a papaya. You’ve never actually eaten one before, and you’re curious about the taste. The vendor winks and ducks under his table, returning with a slip of paper, which he hands to you instead of the papaya.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a1142">
                        <input class="button" name="answer" type="submit" value="$a1141">
END;
            } elseif($answer == $a1141) {
                echo <<<END
                    <p>You take the paper. Apparently today is not the day for your papaya curiosity to be cured. It’s thin onionskin paper, with a few words on it in narrow slanted cursive. It lists an address a few streets over.<br><br>
                    You knock on the door, which swings open under even that slight pressure. “Hello?” you call. The carpet smells of stale cat urine. You hear a voice at the end of the hallway, and approach it.<br><br>
The old woman is hunched over in the darkness, muttering to herself rhythmically. You creep closer to listen. “Supercalifragilisticexpialidocious. Zamborino. Huckititis. Nianicimide.”<br><br>
	You realize the old woman has one bright blue eye open, staring directly at you. Do you apologize, or ask if that was a real spell?</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a11412">
                        <input class="button" name="answer" type="submit" value="$a11411">
END;
            } elseif($answer == $a11411) {
                echo <<<END
                    <p>“Was that a real spell?”<br><br>
                    The woman makes a sound that can only be described as a cackle. She just oozes onomatopoeia.  “Of course not! That would be ridiculous!” she says.<br><br>
                    You smile. She reminds you of your grandmother, who likes to sit out on the porch smoking cigars and yelling at the neighbors in Russian.<br><br>
                    “So, what do you want?” the woman asks.<br><br>
                    “I want to know the shape of the universe.”<br><br>
                    “That’s how you want to use my Sight? Not for a prediction?”<br><br>
                    You nod enthusiastically.<br><br>
                    “All right, then.” The old woman closes her eyes, nodding to herself. “It’s a paralellopipogram.”<br><br>
                    You nod thoughtfully, not understanding the answer or even really why you asked.<br><br>
                    “It’s a good question,” the woman says as if she’d read your thoughts, which she may well have. “I’m Chrono,” she says, the wrinkles of her face multiplying as she grins. “I think you may have the makings of a clairvoyant. Do you find you can make sense of coincidence?”</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a114112">
                        <input class="button" name="answer" type="submit" value="$a114111">
END;
            } elseif($answer == $a114111) {
                echo <<<END
                    <script>
                        document.body.style.backgroundColor = '$red';
                    </script>
                    <p>“No?” you say. This day has gotten too weird. You’re not in Kansas anymore, but you sure want to go back.<br><br>
                    The smile falls from the old woman’s face. Actually falls, her teeth clattering on the floor. Her skin starts melting from her face. You scream and jump back, pivoting to run down the hallway. But the door at the end keeps getting further away no matter how fast you run. Behind you, the monster cackles.<br><br>
                    <div class="ending">
                        Death by cackle</p>
                        
END;
            } elseif($answer == $a114112) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$green';</script>
                    <p>“All right. I will take you on as my apprentice if you can bring me a plumbus.”<br><br>
                    You narrow your eyes at the old woman, sensing a trick. “That’s a Sisyphean task. There’s no such thing as a plumbus, they’re fictional.”<br><br>
                    The woman laughs, impressed. “Very good. Consider yourself my apprentice.”<br><br>
                    Your heart feels light and quick as a hummingbird. You have never been so excited to learn.<br><br>
                    <div class="ending">
                        You gain a mentor!</p>
                        
END;
            } elseif($answer == $a11412) {
                echo <<<END
                    <p>“I’m sorry… the door was open…”<br><br>
                    The woman flutters her knobby hands, dispelling your words. “What do you want to know?”<br><br>
                    “Huh?”<br><br>
                    “Any question. I can answer any question for you.”<br><br>
                    “Even like my future?”<br><br>
                    “Any question.”<br><br>
                    You think for a moment.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a114122">
                        <input class="button" name="answer" type="submit" value="$a114121">
                        
END;
            } elseif($answer == $a114121) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$red';</script>
                    <p>“Um,” you say, feeling kind of stupid for asking. “You wouldn’t happen to know my S.O.’s email password, do you?”<br><br>
                    “Ah,” the old woman says. “You think they’re cheating, do you.”<br><br>
                    You shift your weight from foot to foot, not meeting her eyes. “Yeah.”<br><br>
                    “Why not just ask that?”<br><br>
                    “Oh, you’re right, that makes more sense. Can I ask that instead?”<br><br>
                    “Too late!” cackles the old woman. “It’s ‘pumpernickel.’”<br><br>
                    ***<br><br>
                    You go home and sign into the email account, carefully typing “pumpernickel,”—you usually get confused and spell it “pumpernickle,” but not today. There’s too much riding on this.<br><br>
                    There’s a bunch of emails from Reddit in the inbox, which is already a red flag. But even worse is the terse exchange about having you killed in Singapore so your S.O. can run off with the baker from down the street. Pumpernickel. It all makes sense now.<br><br>
                    <div class="ending">
                        Die in Singapore</p>
END;
            } elseif($answer == $a114122) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$red';</script>
                    <p>“You will die in Singapore,” the woman says immediately.<br><br>
                    “What? Singapore? Why would I be there? What if I just don’t go?”<br><br>
                    “Only one question per person,” the old woman says, closing her eyes.<br><br>
                    “Whatever. Fate is just a word,” you say. “I’m just not going to go to Singapore.”<br><br>
                    “Do what you want,” the woman says with a soft chuckle. “That word will find you when the time is right.”<br><br>
                    You turn and storm out of this creepy dark building. As you push through the door you hear the woman laughing hard, saying, “What an unlucky person!”<br><br>
                    You shake your head. Crazy old lady.<br><br>
                    <div class="ending">
                        Die in Singapore</p>
END;
            } elseif($answer == $a1142) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$red';</script>
                    <p>“I don’t want whatever that is,” you say. “Give me a papaya!”
	The vendor holds out his hand for more money. Apparently the papayas cost more than a dollar. You check your pockets. That’s all the money you have on you. You sigh and trudge away. Apparently today is not the day for your papaya curiosity to be cured.<br><br>
                    <div class="ending">
                        Disappointment</p>
END;
            } elseif($answer == $a115) {
                echo <<<END
                    <p>You’ve never eaten a lemon just on its own, but you really like lemonade, and those lil citrus dudes look so bright, like little gobs of sunshine. You say, “One lemon, please!” with confidence, and hand over your dollar. The vendor doesn’t find your request odd, just gives you a lemon.<br><br>
                    You jab your thumb into the lemon’s peel as you would a lemon, and try to peel it. It doesn’t work very well. The vendor raises his pointer finger in an Aha! gesture, and grabs something from under the table—a paring knife. You thank him and quarter the lemon.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a1152">
                        <input class="button" name="answer" type="submit" value="$a1151">
END;
            } elseif($answer == $a1151) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$green';</script>
                    <p>You feel the lemon juice seeping into the little cuts on your fingers, and decide you’re not ready for that to happen to your mouth. You give the vendor his knife back, and leave the market carrying your lemon chunks until you happen upon a street with a fish and chips shop. You purchase a meal and drizzle lemon juice over your fish.<br><br>
                    <div class="ending">
                        Have a great lunch</p>
END;
            } elseif($answer == $a1152) {
                echo <<<END
                    <p>You take a deep breath to steel yourself and bite into one of the lemon slices, using your teeth to pull the flesh from the peel.<br><br>
                    Ack! It’s more sour than you could have imagined. Your face contorts as you try to swallow. The vendor shakes is head at you, smiling. He ducks under the table again, this time bringing up a jar of Tapatio salsa. You’re bewildered, but he gestures for you to hold out a lemon. You do so, hesitantly, and he pours some salsa on it.<br><br>
You’re unsure about this, but you don’t want to look like a wimp, so you take a bite.
Ack! Even worse than the first time. There’s a sizable chunk of jalapeno in your mouth, in addition to a lemon seed.<br><br>
                    The vendor is doubled over in silent laughter.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a11522">
                        <input class="button" name="answer" type="submit" value="$a11521">
END;
            } elseif($answer == $a11521) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$red';</script>
                    <p>You’re confused and embarrassed from this situation, but you decide to be the bigger person. “Goodbye,” you say coldly, leaving the rest of the lemon on the table, and stalk off to buy a drink to get that taste out of your mouth.<br><br>
                    A middle-aged, harshly blonde woman buying local honey has a large purse with a Chihuahua sitting in it. It’s staring at you with those bulbous, owl-like eyes. You feel like it’s judging you, and somehow this puts you over the edge.<br><br>
                    “What’s your problem?” you shout at the dog. “What is that? A kitten? A mouse? No, it’s an ugly little alien dog. I bet there isn’t enough meat on you to make one hotdog! I hope you’re happy, smug little… little…”<br><br>
                    You lose steam. Everyone is staring at you now. A teenager is filming you with her cell phone. A short bald man stands frozen with a granola bar halfway to his mouth. The dog’s owner looks terrified, as if you’ll turn on her next.<br><br>
                    “I just… I just wanted justice…” you say weakly.<br><br>
                    The teen tugs at her beanie. “Epic,” she says. “This is gonna get so many hits on Youtube.”<br><br>
                    <div class="ending">
                        You go viral for yelling at a dog. I hope you’re ashamed of yourself</p>
END;
            } elseif($answer == $a11522) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$red';</script>
                    <p>“You’re a lackluster salesman! You’re mediocre at your job!” you shout. “What kind of business owner does that to a customer?”<br><br>
                    A passing teenager is unimpressed by your complaints. “Chill out, Captain Thesaurus!” she shouts, rolling her heavily mascaraed eyes.<br><br>
                    You scour your brain for hipper insults to throw at the fruit man. “You suck! You have no swag!” You glance back at the teenager. For a moment you think she’s having an epileptic fit before realizing she’s just laughing at you so hard she’s losing control of your body. It seems Captain Thesaurus has just exacerbated the situation. The fruit vendor is flabbergasted by your behavior. It was just the classic lemon-salsa prank, and you are totally overreacting. Bogus.<br><br>
                    <div class="ending">
                        Humiliated by teen</p>
END;
            } elseif($answer == $a116) {
                echo <<<END
                    <p>You decide you’d like an apple. Classic fruit. Plus, there are just so many apples there—probably hundreds more than any other fruit—all stacked up in a glossy pyramid.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a1162">
                        <input class="button" name="answer" type="submit" value="$a1161">
END;
            } elseif($answer == $a1161) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$green';</script>
                    <p>“One apple, please!” You hand the vendor a dollar. He jabs his hand into the apple pyramid as if ripping out a heart and somehow removes an apple from near the bottom without disturbing any of the others.  He holds it in both hands, over his head. A voice speaks, seeming not to come from the vendor but from the air around him.<br><br>
                    “This therefore hath seemed good to me, that a man should eat and drink, and enjoy the fruit of his labour, wherewith he hath labored under the sun, all the days of his life, which God hath given him: and this is his portion.”<br><br>
                    “What?” you ask.<br><br>
                    “Ecclesiastes,” the voice tells you, and after a brief pause starts back up again. 	“And the woman saw that the tree was good to eat, and fair to the eyes, and delightful to behold: and she took of the fruit thereof, and did eat, and gave to her husband who did eat.” Pause. “Genesis.”<br><br>
                    “You know,” you venture, “It probably wasn’t an apple that was being referred to in that chapter of the Bible. Just based on the region and time period.”
	The vendor looks at you appraisingly and hands over the apple.<br><br>
                    You take a bite.<br><br>
                    Instantly you understand everything; all the different paths your life could take. Some endings are scary, some horribly sad, some full of love. Everything is happening all at once everywhere. The knowledge is clear as a trumpet blast in your ear.<br><br>
                    <div class="ending">
                        Achieve omniscience</p>
END;
            } elseif($answer == $a1162) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$red';</script>
                    <p>You take an apple yourself, because there’s one that just seems to call out to you, the little gleam on its skin catching your eye like a wink. You remove it from the structure with care as if playing Jenga, using your other hand to brace those around it.<br><br>
                    The pyramid topples. Apples bounce everywhere, making hollow thunks against the concrete, against your bones. You are buried in apples, smothered by apples, simply inundated by apples.<br><br>
                    <div class="ending">
                        Die by apples</p>
END;
            } elseif($answer == $a117) {
                echo <<<END
                    <p>You point to one of those lovely soft peaches. The vendor silently points to the same one, with a questioning look on his kind face. You nod enthusiastically. Speaking would seem wrong, vulgar, in response to this quiet man. You feel as if you are in a natural state perfect communication.<br><br>
                    The vendor picks up the peach you specified and crushes it in his hand. His strong fingers mulch the poor fruit, juice spurting everywhere. You are horrified at his destruction of one small, perfect thing in the universe.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a11522">
                        <input class="button" name="answer" type="submit" value="$a1171">
END;
            } elseif($answer == $a1171) {
                echo <<<END
                    <p>You remain silent. You sense that this man’s wisdom exceeds your own. His actions may seem cruel, but he is just trying to teach you a lesson. Life is change. Beautiful things are destroyed, and new ones created.<br><br>
                    A line of T.S. Eliot’s comes to mind. “Do I dare disturb the universe? Do I dare to eat a peach?”</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a11712">
                        <input class="button" name="answer" type="submit" value="$a11711">
END;
            } elseif($answer == $a11711) {
                echo <<<END
                    <script>
                        document.body.style.backgroundColor = '$red';</script>
                    <p>You don’t dare to eat a peach, afraid of watching the vendor crush them in front of you one by one. You nod goodbye and leave the farmer’s market behind you. You remember the feeling you’d had earlier, of being chased, but dismiss it. You take your dollar to McDonalds for some fries. McDonalds cashiers never smash the food in front of a patron’s eyes. This is comforting to you, you tell yourself as you watch your fries being funneled into a small white paper sack. This is good. This is safe.<br><br>
                    You wipe sticky crumbs from a plastic chair with a napkin and sit down to munch on your dissatisfying fries. What a normal day you’re having. What a normal, perfectly fine day.<br><br>
                    <div class="ending">
                        Die of boredom 40 years later</p>
END;
            } elseif($answer == $a11712) {
                echo <<<END
                    <script>
                        document.body.style.backgroundColor = '$green';
                    </script>
                    <p>You do indeed dare to eat a peach. You point to another one, equally as lovely as the first. The vendor smiles a gentle smile, and gestures for you to pick it up yourself. You do, and raise it to your mouth. There is a soft tickle of peach fuzz against your tongue before your teeth slice through the peachflesh, your mouth full of perfume, tart, sweet. You have learned something today.<br><br>
                    <div class="ending">
                        Learned something!</p>
END;
            } elseif($answer == $a118) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$green';</script>
                    <p>You’re feeling adventurous, so you ask for a coconut. There’s a mischievous look in the vendor’s eye as he gestures to the coconuts, inviting you to select your own. You rap a knuckle against one and hear the hollow echo of its ripeness. In that moment the world seems to spin around you, the air transformed into a spectacular spray of sparkles.<br><br>
                    You open your eyes and find yourself on a tropical beach. The coconut is still in your hand, and you drop it before something else weird happens. It’s like a Portkey from Harry Potter? But why?<br><br>
                    You examine your surroundings. Pale sand stretches out to either side of you with no buildings or other humans within sight. Behind you are a clump of hibiscus trees with huge pink flowers drooping from their boughs. Clear blue water meets the sand in a rush of foam. You wade into the water, warm against your shins, and you see colorful creatures through it—silver darting fish, a huge blue lobster, even a little octopus with its tentacles curling and uncurling. You don’t know where you are or why. Somewhere in the Caribbean? Java?<br><br>
                    A sea turtle is approaching you and you weep at the beauty of life.<br><br>
                    <div class="ending">
                        You live here now</p>
END;
            } elseif($answer == $a119) {
                echo <<<END
                    <p>You point to the bananas, and the vendor nods, deftly snapping a kingly one from the bunch. Once the banana is in your hand you remember. You understand everything.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a1191">
                        <input class="button" name="answer" type="submit" value="$a1192">
END;
            } elseif($answer == $a1191) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$yellow';</script>
                    <p>You throw the banana down on the ground. The story ends.
	You wake up in your bed, furrow your brow, and go back to sleep.<br><br>
                    <div class="ending">
                        I guess it was all a dream.</p>
END;
            } elseif($answer == $a1192) {
                echo <<<END
                    <p>Defiantly, you peel the banana and take a bite. You’re staying in Wonderland. You sense him behind you, stepping onto the patio that marks the boundary of the farmer’s market. He does not see you yet, but raises his head to the sky and sniffs. The two of you lock eyes. It’s him. The gorilla.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a11921">
                        <input class="button" name="answer" type="submit" value="$a11922">
END;
            } elseif($answer == $a11921) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$yellow';</script>
                    <p>You drop your banana and run, dodging around Amish farmers in their overalls, past hipsters marveling at homemade jams. The gorilla follows at a casual pace. The pace of a hunter who has already won.<br><br>
                    You are hit by a bus. The gorilla sprints to your side and…pulls off its head. The world spinning around you, you wonder whether this is a pre-death hallucination. Or whether the banana was drugged.<br><br>
                    “Oh my god, oh my god, oh my god,” says the freckled teenager inside the gorilla suit. “This isn’t what was supposed to happen. It was just a prank.” You feel a warm trickle of blood from your head, but no pain. You are just staring up at the teenager’s face as if it holds all the secrets of the world. Each of us does. Every last one of us.<br><br>
                    His hot tears fall on your face. You smile weakly. You want him to know you don’t blame him, and search for words to this effect. Only one comes to mind. “Hello,” you say.<br><br>
                    <div class="ending">
                        You die with a sense of peace.</p>
END;
            } elseif($answer == $a11922) {
                echo <<<END
                    <p>You throw your banana on the ground and crush it under your heel like a cigarette, getting pale yellow mush all over your shoes. You don’t care. You’ve got a fight to fight. You’re gonna get some frickin closure.<br><br>
                    As you walk toward the gorilla with a purposeful stride, you scan for possible weapons. Your eyes bounce from booth to booth. There’s the fruit stand where you got the banana, which you certainly don’t want to return to. Farm-fresh eggs. A burly man dressed in chain mail is hawking… swords.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a119222">
                        <input class="button" name="answer" type="submit" value="$a119221">
END;
            } elseif($answer == $a119221) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$green';</script>
                    <p>You grab a carton of eggs, shouting an apology to the young woman with the print dress and long braid at the table. She looks confused, but calls, “Good luck!”<br><br>
                    “Luck is not in my vernacular!” you yell back, throwing eggs as you run, but they are landing wildly off mark, hitting the ground, a tree, a passerby. The gorilla is just standing there, waiting for you.<br><br>
                    You are now only a couple yards away from the gorilla. You throw one more egg, which goes wide, but the gorilla calmly reaches out one hand and grabs it from the air like a fly.<br><br>
                    You are regretting every decision you have made since you woke up this morning. The gorilla strides toward you on its bandy legs, arms swinging loosely. It gives you the egg back, looming over you. You feel the gorilla’s hot breath on your forehead, smell the halitosis. It grabs your jaw with one huge hand and tilts your face up aggressively.<br><br>
                    “Be careful,” the gorilla grunts. “Go meet Jensen. The Lichtenstein Hilton.” And it walks away.<br><br>
                    <div class="ending">
                        You remember you are a spy embroiled in a worldwide crisis.</p>
END;
            } elseif($answer == $a119222) {
                echo <<<END
                    <p>You dash past the Ren Fair booth, snatching a sword from its scabbard. You don’t need to say anything to the vendor. He knows a quest when he sees one. “Defeat that ne’er-do-well!” he calls after you.<br><br>
                    You can’t read the gorilla’s expression, but judging from the way he is glancing around, he has lost his cool. His long hand closes around a long piece of wood engraved with the phrase “I’d rather be fishing,” and raises it to parry your strike just as you lunge with your sword.<br><br>
                    The gorilla is fighting defensively, just blocking all of your attacks without initiating any of his own.<br><br>
                    Veins pumping with adrenaline, you shout, “Fight me like a man!”
	The gorilla growls, which you somehow understand to mean, “I am a female gorilla.” And then, “It is dishonorable to injure a weakling like you.”</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a1192223">
                        <input class="button" name="answer" type="submit" value="$a1192222">
                        <input class="button" name="answer" type="submit" value="$a1192221">
END;
            } elseif($answer == $a1192221) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$green';</script>
                    <p>Stop fighting to apologize for assuming the gorilla’s gender.
	You let your sword arm fall. “Listen, I’m sorry,” you say. “I try not to make assumptions about gender, I just was so scared I wasn’t thinking clearly. I know I have a lot of learning left to do.”<br><br>
                    The gorilla nods and reaches out a hand to shake in truce. You lift your own, shifting the sword to your non-dominant hand.<br><br>
                    The gorilla makes a quiet hooting sound.<br><br>
                    “Yes, it is a beautiful sword,” you agree. “It’s not mine, though, I was just borrowing it from that guy for this fight.”<br><br>
                    The gorilla leads you back to the chain-mail-clad man and pays for the sword. She puts a heavy hand on your shoulder and growls kindly, “This is a worthy weapon. But you will need a mentor to teach you about fighting and not making assumptions about masculinity or a gender binary. Would you like to be my apprentice?”<br><br>
                    You kneel down, fist over your heart. “It would be an honor.<br><br>
                    <div class="ending">
                        You gain a mentor!</p>
END;
            } elseif($answer == $a1192222) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$red';</script>
                    <p>You let your sword arm fall. “This just feels wrong. I can’t fight a girl.”<br><br>
                    The gorilla makes a low rumbling sound, almost like a purr, which you take to mean she accepts this. She steps closer and reaches out a hand to shake in truce. You lift your own, shifting the sword to your non-dominant hand—and as you do so, the gorilla grabs it from you. You had not imagined such a large creature could move so fast.<br><br>
                    You eye the gorilla warily. She is not attacking you. She is examining the sword’s pulchritudinous pommel. It really is quite something, set with green and blue jewels. The gorilla nods decisively, raises the sword, and plunges it into your chest, catching your arm with her other hand as your knees buckle. She eases you to the ground and sets down the sword so her hands are free for sign language. She calmly signs “misogynist,” at you.<br><br>
                    However, you don’t understand sign language.<br><br>
                    <div class="ending">
                        Die in confusion</p>
END;
            } elseif($answer == $a1192223) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$yellow';</script>
                    <p>“I’m no weakling!” you shout. You swing your sword wildly. The sword salesman runs over to disrupt the fight.<br><br>
                    “I’m sorry, quester, but your form is terrible. You might injure a bystander.”<br><br>
                    The gorilla growls in agreement. Her eyes lock with the swordsman’s and they exchange a look of Mamihalapinatapai. The swordsman breaks the eye contact, looking down at the ground. The gorilla is a powerful warrior. Way out of his league. He just makes the swords, he doesn’t use them.<br><br>
                    The gorilla gives a soft hoot. She is complimenting his handiwork.
	You are not sure either of them remember you are even standing there.<br><br>
                    They are walking toward his booth so he can show her the other weapons he has made, the mace, the stiletto dagger, the unfinished crossbow.<br><br>
                    You stand there, still holding a sword. You are wishing you hadn’t thrown your banana on the ground, as you’re pretty hungry, especially after exerting all that energy in the fight. You sigh and lay the sword on the ground. Might as well head home and eat some cereal.<br><br>
                    <div class="ending">
                        Eat cereal at home, alone.</p>
END;
            } elseif($answer == $a12) {
                echo <<<END
                    <p>Your house is only about 15 minutes away, so you walk there. You’re looking forward to laying down on the couch and turning on the TV to forget all this weirdness.<br><br>
                    Your house is right where you left it, just the way you remember. You walk inside and slip off your shoes. There is noise coming from the kitchen. Roommate? Significant other? Assailant? You have no idea. You go check it out.<br><br>
                    There is a blonde woman in the kitchen, her back to you. She is wearing fetching purple high-heeled sandals. “Oh hi!” she exclaims, turning to you. “Great timing! I just made waffles!” She is so beautiful.<br><br>
                    She sets a plate on the counter in front of you.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a122">
                        <input class="button" name="answer" type="submit" value="$a121">
END;
            } elseif($answer == $a121) {
                echo <<<END
                    <p>“No, thanks,” you say. “I’ve already eaten.” You’re not sure if this is true.<br><br>
                    The woman’s face changes in a moment, becoming colder, harder.<br><br>
                    “So that’s how you’re gonna be,” she says. She spins around and grabs the toaster, presses a button, and chucks it at you, ducking under the kitchen island. Evidently it has been rigged into a bomb. Unfortunately for her, the power cable gets caught on a chair as it flies toward you, so it explodes nearer her.<br><br>
                    The blast knocks you over and stuns you for a moment, but you survive.  However, it is clear that the woman was killed by her own contraption. You stand up and say, “Shoddy design,” feeling like you’re in a movie. Then you throw up violently.<br><br>
                    You certainly can’t stay here now that there’s a dead woman in your house. If you run you can get back to the station in time to get your connecting train.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a1211">
END;
            } elseif($answer == $a122) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$red';</script>
                    <p>The woman pulls a jar of peanut butter from the cabinet and sets it next to your plate.<br><br>
                    “Peanut butter? Not syrup?” you ask.<br><br>
                    She giggles. “You always eat them with peanut butter! I know, I think it’s weird too. But I’ll get out the syrup if you want to join the world of normal people.” She is already rummaging through the refrigerator as she speaks.<br><br>
                    “No, it’s fine. I’ll eat them like this. I just blanked out,” you say. You’re nervous around this beautiful woman, although she seems to know you quite well. You spread the peanut butter on your waffle, cut off a large bite, and fork it into your mouth.<br><br>
                    “Delicious, thank you,” you say with your mouth full. You’re having trouble swallowing. Perhaps because the peanut butter is so dry.<br><br>
                    The blonde woman laughs as she watches you struggle to swallow. “You’re allergic to peanuts, you idiot.”<br><br>
                    You do feel like an idiot. How could you forget that? On the other hand, you still don’t remember your name, either, so…<br><br>
                    The woman sips at a cup of coffee as she watches you asphyxiate. <br><br>
                    <div class="ending">
                        Death by peanut butter</p>
END;
            } elseif ($answer == $a2) {
                echo <<<END
                    <p>After a long train ride with several transfers in between, you arrive in Birmingham.  As you descend the train’s stairs, you spot a short man with glasses and dark hair jumping up and down. He’s shouting “Bunny! Bunny!”<br><br>
                    You think his excitement is a little excessive, but rabbits are adorable. You walk toward him in the hopes of glimpsing it, only to have the man grab you by the arm and shout “Bunny!” right in your face.<br><br>
                    You realize he is addressing you as Bunny for some reason. “Do I know you?” you ask.<br><br>
                    “Bunny, we don’t have time for this,” he says. “We’re gonna be late.” He is dragging you through the crowd of people surrounding the train.<br><br>
                    “Where are we going?” you ask, though you gamely run beside him.<br><br>
                    “The hackathon, you dingus! We’re gonna be late!”<br><br>
                    He pulls you into a car that has three other people in it already. When the two of you get in, it’s a tight squeeze.<br><br>
                    “Bunny’s having an identity crisis,” the short man said. The occupants of the car sound off in order, left to right and front to back.<br><br>
                    “Platypus.”<br><br>
                    “Moose.”<br><br>
                    “T. Rex.”<br><br>
                    “And I’m Goat,” says the first man you met.<br><br>
                    “And I’m Bunny,” you say hesitantly.<br><br>
                    Everyone else bursts out laughing.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a22">
                        <input class="button" name="answer" type="submit" value="$a21">
END;
            } elseif($answer == $a21) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$yellow';</script>
                    <p>You laugh along, and continue to go with the flow for the duration of the hackathon. You have no idea what you’re doing, or if you’ve ever known how to code, but you just bash the keyboard while frowning for hours at a time. In conversation, you toss out computer words you don’t understand, such as “compiler,” “node,” “hardwire,” and even sometimes “list.”<br><br>
                    Despite your initial weirdness, your team doesn’t notice anything is up, and at the end they call you a “hacker superhero.” One of the sponsor companies even offers you a job!<br><br>
                    <div class="ending">
                        Fake it til you make it</p>
END;
            } elseif($answer == $a22) {
                echo <<<END
                    <p>“I demand to know what is going on! Why are we doing this? We do we have weird names? Why don’t I remember anything?”<br><br>
                    “Because of the covenant,” Moose says in a low voice, staring at you gravely.<br><br>
                    “The… covenant?”<br><br>
                    The gang bursts out laughing again.<br><br>
                    “Lemme slow things down for you,” says Platypus, who’s driving. “We’re going to a hackathon. We each have animal nicknames because that’s like, our team signature. You probably don’t remember anything because your LDR just ended, you just got dumped in a bad way, and I think you got trashed because of it.”<br><br>
                    You stare out the window as the car passes a barn. This does all seem to make sense. “Wait,” you say. “Where am I from?”<br><br>
                    “Kansas City,” says T. Rex patiently.
	If you’re grieving this relationship, and apparently having trouble with your memory, should you go home? Or will this hackathon be a good way to keep your mind off your troubles?</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a222">
                        <input class="button" name="answer" type="submit" value="$a221">
END;
            } elseif($answer == $a221) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$red';</script>
                    <p>You agree to go to the hackathon, but you feel dead inside, all flat. You churn out lines of code, but your heart’s not in it. The absence of your S.O. grows in you, a pernicious ache. You wish a doctor could prescribe you nitroglycerin for this chest pain, but you know it’s just a broken heart.<br><br>
                    <div class="ending">
                        You hack sadly</p>
END;
            } elseif($answer == $a222) {
                echo <<<END
                    <script>document.body.style.backgroundColor = '$green';</script>
                    <p>“Listen, team, I’m really sorry, but I think I need to go home. I’m a mess right now, and I’m not gonna be any help hacking. Can you take me back to the train station?” 
	Platypus looks to T. Rex for approval. T. Rex nods.<br><br>
    After another train ride, so long it feels as if you’ve traveled a parsec, you’re at home. Your mom makes you spaghetti and a baked potato. There’s something about the way your mom keeps that house meticulously clean that makes you feel less like a mess.<br><br>
                    <div class="ending">
                        Comforted by Mom</p>
END;
            } elseif($answer == $a3) {
                echo <<<END
                    <p>“Why are you staring at me?” you ask. The elderly man across the aisle has his eyes locked on you in a way that looks neither particularly kind nor mean nor really any other earthly emotion you are familiar with.<br><br>
                    “Sorry,” the old man says in a soft, reedy voice. He sounds like a haunted puppet. “It’s just… the way you smell,” he explains.
	</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value='$a32'>
                        <input class="button" name="answer" type="submit" value="$a31">
END;
            } elseif($answer == $a31) {
                echo <<<END
                    <p>You hear another announcement that the train is about to stop in Kansas City.</p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a2">
                        <input class="button" name="answer" type="submit" value="$a1">
END;
            } elseif($answer == $a32) {
                echo <<<END
                    <p>The old man gives an odd smile, his lips too lax. “Yes,” he whispers. “You smell… like flames.”<br><br>
                    You are seriously freaked out by this guy, and you stand to move to a different seat, but the man grabs your forearm, his fingers brittle but strong. “Be careful,” he says, and releases you, sinking back into his seat.<br><br>
                    You hear another announcement that the train is about to stop in Kansas City. </p>
                    <div class="options">
                        <input type="hidden" name="stage" value="q">
                        <input class="button" name="answer" type="submit" value="$a2">
                        <input class="button" name="answer" type="submit" value="$a1">
END;
            }
            echo <<<END
                    <br><br>
                    </div>
                </div>
                <div class="gradientback"></div>
            </form>
END;
        }
        // Main control
        if (isset($_POST['stage'])) {
            if ($_POST['stage'] == 'start') {
                post_question($_POST['stage'], 0);
            } elseif ($_POST['stage'] == 'q' AND isset($_POST['answer'])) {
                $answer = $_POST['answer'];
                post_question($_POST['stage'], $answer);
            } else {
                beginning();
            }
        } else {
            beginning();
        }
    ?>
</body>
</html>