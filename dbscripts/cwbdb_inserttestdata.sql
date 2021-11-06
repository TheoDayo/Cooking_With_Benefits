
USE cwb_db;

// Samples of inserting data:


INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `dob`, `gender`, `nationality`, `fooddislikes`, `allergies`, `bio`, `date_created`)
	VALUES
		(1, 'Terra', 'Misu', 'terra@gmail.com', 'terramisu123', '18/10/2000', 'Female', 'Japanese', 'Corn, lemon', 'Dairy', 'Hi, I\'m a college student looking to make new friends.', '2021-09-10 10:11:12');


INSERT INTO `usr_specializations` (`user_id`, `specialization_type`, `specialization_name`)
	VALUES
		(1, 1, 'Japanese'),
		(1, 1, 'French'),
		(1, 2, 'American')
		;
		
INSERT INTO `usr_interests` (`user_id`, `interest_type`, `interest_name`)
	VALUES
		(1, 1, 'Russian'),
		(1, 3, 'Russian')
		;

		
	
INSERT INTO `recipes` (`recipe_id`, `user_id`, `recipename`, `recipecategory`, `nationality`, `date_added`, `servings`, `serving_type`, `time_to_make`, `meal_type`)
	VALUES
		(1, 1, 'Sushi', 'Cuisine', 'Japanese', '18/10/2021', 2, 'plates', '01:30:00', 'Lunch, Dinner')
		;


INSERT INTO `recipe_ingredients` (`recipe_id`, `ingredient`, `amount_number`, `amount_type`)
	VALUES
		(1, 'Rice', 1, 'batch'),
		(1, 'Raw salmon', 1.5, 'lbs'),
		(1, 'Cream cheese', 4, 'oz'),
		(1, 'Avocado', 1, null),
		(1, 'Seaweed', 3, 'cups')
		;
