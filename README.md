# ahoymysterygame
Ahoy is an exciting mystery game set on a ship during World War II. You'll be thrown into a suspenseful adventure as you navigate the treacherous waters of the high seas. The game is full of unexpected twists and turns, keeping you on the edge of your seat as you try to uncover the truth behind the mysterious events that are happening on board.

As you play through the game, you'll meet a diverse cast of characters, each with their own secrets and motives. You'll need to carefully examine clues, interrogate suspects, and piece together the evidence to solve the mystery. But be warned, danger lurks around every corner, and the wrong move could have deadly consequences.

Ahoy offers an immersive experience that will keep you engaged and entertained from beginning to end. With its gripping storyline, richly detailed setting, and challenging puzzles, this game is sure to appeal to anyone who loves a good mystery. So set sail and join the adventure, but be prepared for anything – you never know what secrets may be lurking beneath the surface.

# Skills Assessed
Playing Ahoy can help develop a variety of valuable skills, including both soft skills and cognitive abilities. For example, players can develop strong communication and collaboration skills as they work to solve the mystery alongside other characters in the game. The game also encourages players to think creatively and strategically, as they explore different options and try to find the best way to uncover the truth.

Additionally, Ahoy requires players to have a keen eye for detail and the ability to think critically about the evidence they uncover. Players must be observant and pay attention to small details in order to make connections and solve the mystery. This can help improve analytical and problem-solving skills, as well as attention to detail.

Playing this game can also foster a sense of curiosity and a desire to learn more. Players are encouraged to explore different areas of the ship, talk to different characters, and uncover hidden clues in order to uncover the truth. This can help to develop a sense of intellectual curiosity, and a willingness to explore and learn new things.

Overall, playing Ahoy can help develop a range of skills that are valuable both in and outside of the game. From soft skills like communication and collaboration, to cognitive abilities like critical thinking and attention to detail, the game offers a challenging and engaging experience that can help players grow and develop.

# Features
* The admin has password and username with which only admin can able to view the dashboard.
* The user data insights has a table that has records for the time and score of each question that the user has attempted.
* The user's score will determine the soft skills possessed by him/her.
* When user refreshes the page it pops up an alert which navigates us to home based on the option selection.
* Anyone with an email address can create an Id and password to participate in the game.
* The puzzle contains.
  * 6 clues
  * 6 dead-ends
  * 1 solution 
# Scoring
  <pre>
  if($sum<=60)
{
  echo "<script>alert('Your score 10/10 and total time taken is $sum (secs)');</script>";
  $val=10;
}
else if($sum<=110)
{
  echo "<script>alert('Your score 9/10 and total time taken is $sum (secs)');</script>";
  $val=9;
}
else if($sum<=180)
{
  echo "<script>alert('Your score 8/10 and total time taken is $sum (secs)');</script>";
  $val=8;
}
else if($sum<=220)
{
  echo "<script>alert('Your score 7/10 and total time taken is $sum (secs)');</script>";
  $val=7;
}
else if($sum<=350)
{
  echo "<script>alert('Your score 6/10 and total time taken is $sum (secs)');</script>";
  $val=6;
}
else{
  echo "<script>alert('Your score 5/10 and total time taken is $sum (secs)');</script>";
  $val=5;
}
  </pre>
Here the $sum is total time taken by the user written in the php code
# Possible Ways to Solve
## Question 1
It is all about to find out in which food item the toxic substance might present
## Answer 1
Beef
## Question 2
To find the correct paper number
## Answer 2
Paper 2
## Question 3
There will be morse code and 3 drug bottles
## Answer 3
Morse code - 0.2 ML of RICIN
## Question 4
Riddle for ventilator
## Answer 4
Ventilator
## Question 5
Find the correct ventilator
## Answer 5
Pipe 1
## Question 6
Find the KILLER ?
## Answer 6
2
# Technology Used
The game creation process often involves a mix of different technologies, and in the case of this particular game, several programming languages were utilized. PHP is a server-side scripting language used to build the game's back-end functionality, while JavaScript was used for front-end development to make the game interactive and responsive. HTML was used for the game's user interface and web design, providing the basic structure of the game's layout. Additionally, Python was likely used for scripting and game logic, as it is a versatile language often used for game development. Overall, this combination of technologies allowed for a robust and engaging game to be created, leveraging the unique strengths of each programming language.
* Clues: There are clues in evry page which leads to next clue
* Users: It contains there username email and there password.
* Scores and Time: Every clue has a start and end timer.
# DataBase Used
ahoydatabase
# Table Used
## user_credentials
| ID | DATATYPE | INDEX |
| --- | --- | --- |
| id | varchar(256) | primary key |
| username | varchar(256) | not null  |
| email | varchar(256) | not null |
| pass | varchar(256) | not null |
| total_score | INT | default = 0 |
| total_time | INT | default = 0 |
## for score updation
| SCORE | DATATYPE | ROUND |
| --- | --- | --- |
| score_3 | BIGINT | first round |
| score_7 | BIGINT | second round |
| score_10 | BIGINT | third round |
| score_11 | BIGINT | fourth round |
| score_12 | BIGINT | fifth round |
| score_14 | BIGINT | sixth round |
# Installation
To play Ahoy, a game built using PHP and MySQL, you will need to have a local development environment set up on your machine. One way to do this is by using XAMPP, a cross-platform web server solution that includes Apache, MySQL, and PHP. To install XAMPP, you can download the appropriate version for your operating system from the Apache Friends website and run the installer. Once XAMPP is installed, you will need to start the Apache and MySQL services to run the game. You can then import the Ahoy database into your local MySQL server and modify the database configuration settings in the game's PHP files to connect to your local database. Finally, you can open the game in your web browser by navigating to the game's index.php file in the XAMPP htdocs directory. With these steps completed, you should be able to play Ahoy locally on your machine.
#About Me
I'm currenly studying 3rd BTECH in ANITS VSKP a programmers always wanted to develop these kind of mystery games. My interests are machine learning and web development.
#Skills
* Javascript
* PHP
* HTML
* MySql
* CSS
### Releases
No releases published
### Packages
No packages pubished
