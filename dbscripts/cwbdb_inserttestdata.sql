
USE cwb_db;


-- cleaning tables
DELETE from `matches`;
DELETE from `recipe_ingredients`;
DELETE from `recipes`;
DELETE from `usr_interests`;
DELETE from `usr_specializations`;
DELETE from `users`;


-- Samples of inserting data:


INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email_address`, `password`, `birth_date`, `gender`, `nationality`, `diet`, `bio`, `date_created`)
	VALUES
		(1, 'Terra', 'Misu', 'terra@gmail.com', 'terramisu123', '18/10/2000', 'Female', 'Japanese', 'Vegetarian', 'Hi, I\'m a college student looking to make new friends.', '2021-09-10 10:11:12'),
		(2, 'Joe', 'Doe', 'joedoe@fake.com', 'joedoe123', '18/10/1998', 'Male', 'Russian', 'Vegetarian', 'Looking to make new friends.', '2021-08-07 10:11:12');


INSERT INTO `usr_specializations` (`user_id`, `specialization_type`, `specialization_name`)
	VALUES
		(1, 1, 'Japanese'),
		(1, 1, 'French'),
		(1, 2, 'American'),
		(2, 1, 'Vietnamese'),
		(2, 1, 'Brazilian')
		
		;
		
INSERT INTO `usr_interests` (`user_id`, `interest_type`, `interest_name`)
	VALUES
		(1, 1, 'Russian'),
		(1, 3, 'Russian'),
		(2, 1, 'Japanese'),
		(2, 1, 'French')
		;

		
	
INSERT INTO `recipes` (`recipe_id`, `user_id`, `recipename`, `recipecategory`, `nationality`, `date_added`, `servings`, `serving_type`, `time_to_make`, `meal_type`)
	VALUES
		(1, 1, 'Sushi', 'Cuisine', 'Japanese', '18/10/2021', 2, 'plates', '01:30:00', 'Lunch, Dinner'),
		(2, 1, 'Stroganoff', 'Cuisine', 'Russian', '18/09/2021', 2, 'plates', '01:30:00', 'Lunch, Dinner')
		;


INSERT INTO `recipe_ingredients` (`recipe_id`, `ingredient`, `amount_number`, `amount_type`)
	VALUES
		(1, 'Rice', 1, 'batch'),
		(1, 'Raw salmon', 1.5, 'lbs'),
		(1, 'Cream cheese', 4, 'oz'),
		(1, 'Avocado', 1, null),
		(1, 'Seaweed', 3, 'cups'),
		(2, 'Beef', 1, 'batch'),
		(2, 'Mushrooms', 1, 'batch'),
		(2, 'katchup', 1, 'batch'),
		(2, 'Mostard', 1, 'batch'),
		(2, 'Heavy Cream', 1, 'batch')
		;



INSERT INTO `matches` (`user_A_id`, `user_B_id`, `accepted`, `date_match`)
	VALUES
		(1, 2, FALSE, '2021-11-17 10:30:07');


INSERT INTO `rating_and_review` (user_reviewer_id, user_reviewed_id, recipe_id, rating, comment)
	VALUES (2, 1, 1, 1, 'Thats not good'),
		(2, 1, 2, 4, 'Thats good');

