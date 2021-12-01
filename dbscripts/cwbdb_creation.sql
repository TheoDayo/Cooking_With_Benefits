/*Create Script*/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

-- Database creation
CREATE OR REPLACE DATABASE cwb_db;
USE cwb_db;


-- Tables definition


CREATE TABLE `users` (
  `user_id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(50) NOT NULL,
--  `profile_pic` text NOT NULL,
  `nationality` varchar(50),
--  `fooddislikes` varchar(300),
--  `allergies` varchar(300),
  `diet` varchar(300),
  `bio` text,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  
  PRIMARY KEY (user_id)
);


CREATE TABLE `usr_specializations` (
  `user_id` int(30),
  /* 1 for cuisine, 2 for baking, 3 for mixology */
  `specialization_type` int(2) NOT NULL,
  `specialization_name` varchar(20) NOT NULL,
  
  PRIMARY KEY (user_id, specialization_type, specialization_name),
  FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);


CREATE TABLE `usr_interests` (
  `user_id` int(30),
    /* 1 for cuisine, 2 for baking, 3 for mixology */
  `interest_type` int(2) NOT NULL,
  `interest_name` varchar(20) NOT NULL,
  
  PRIMARY KEY (user_id, interest_type, interest_name),
  FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);	



CREATE TABLE `recipes` (
  `recipe_id` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `recipename` varchar(100) NOT NULL,
    /* We can change in future implementations: 1 for cuisine, 2 for baking, 3 for mixology */
  `recipecategory` varchar(100) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `servings` int NOT NULL,
  `serving_type` varchar(50) NOT NULL,
  `time_to_make` TIME,
  `meal_type` varchar(200),
  
  PRIMARY KEY (recipe_id),
  FOREIGN KEY (user_id) REFERENCES users(user_id)
);


CREATE TABLE `recipe_ingredients` (
  `recipe_id` int(30),
  `ingredient` varchar(100) NOT NULL,
  `amount_number` NUMERIC(6,2),
  `amount_type` varchar(20),
  
  PRIMARY KEY (recipe_id, ingredient),
  FOREIGN KEY (recipe_id) REFERENCES recipes(recipe_id) ON DELETE CASCADE
);


CREATE TABLE `matches` (
  `user_A_id` int(30),
  `user_B_id` int(30),
  `accepted` boolean,
  `date_match` datetime NOT NULL DEFAULT current_timestamp(),
  
  PRIMARY KEY (user_A_id, user_B_id),
  FOREIGN KEY (user_A_id) REFERENCES users(user_id),
  FOREIGN KEY (user_B_id) REFERENCES users(user_id)
);



CREATE TABLE `rating_and_review` (
  `user_reviewer_id` int(30),
  `user_reviewed_id` int(30),
  `recipe_id` int(30),
  `review_date` datetime NOT NULL DEFAULT current_timestamp(),
  `rating` int(3) NOT NULL,
  `comment` text,
  
  PRIMARY KEY (user_reviewer_id, user_reviewed_id, recipe_id),
  FOREIGN KEY (user_reviewer_id) REFERENCES users(user_id),
  FOREIGN KEY (user_reviewed_id) REFERENCES users(user_id),
  FOREIGN KEY (recipe_id) REFERENCES recipes(recipe_id)
);


CREATE TABLE `chats` (
  `chat_id` int(30) NOT NULL AUTO_INCREMENT,
  `user_A_id` int(30),
  `user_B_id` int(30),
  
  PRIMARY KEY (chat_id),
  FOREIGN KEY (user_A_id) REFERENCES users(user_id),
  FOREIGN KEY (user_B_id) REFERENCES users(user_id)
);

CREATE TABLE `chat_messages` (
  `message_id` int(30) NOT NULL AUTO_INCREMENT,
  `chat_id` int(30),
  `message_date` datetime NOT NULL DEFAULT current_timestamp(),
  `message_text` text NOT NULL,
  
  PRIMARY KEY (message_id),
  FOREIGN KEY (chat_id) REFERENCES chats(chat_id)

);

CREATE TABLE `user_sesions` (
  `user_id` int(30),
  `session_starting_time` datetime NOT NULL DEFAULT current_timestamp(),
  `session_closing_time` datetime,
  
  PRIMARY KEY (user_id, session_starting_time),
  FOREIGN KEY (user_id) REFERENCES users(user_id)
);

