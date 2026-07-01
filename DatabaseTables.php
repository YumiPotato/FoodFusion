<?php

	include ("DatabaseConnection.php");

	//member table creation
	$memberTable = "Create Table Member (MemberID int Auto_Increment Primary Key, FName varchar(30), LName varchar(30), Username varchar(50), Email varchar(50), Password text, Gender varchar(30));";

	$runMemberTable = mysqli_query($dbConnect, $memberTable);

	if (isset($runMemberTable)) {
		echo "Member table is created!";
	}
	else echo "Table creation failed!";


	//team member table creation
	$teamMemberTable = "Create Table TeamMember (TeamMemberID int Auto_Increment Primary Key, Name varchar(100), Role varchar(100), Description text, Image text);";

	$runTeamMemberTable = mysqli_query($dbConnect, $teamMemberTable);

	if (isset($runTeamMemberTable)) {
		echo "Team Member table is created!";
	}
	else echo "Table creation failed!";


	//team member table data insertion
	$insertTeamMemData = "insert into TeamMember (Name, Role, Description, Image) VALUES
							('Xiao', 'Head Chef', 'Xiao brings 15 years of culinary excellence with a passion for fusion flavors and innovation in every dish.', 'images/xiao.jpg'),
							('Hu Tao', 'Creative Director', 'Hu Tao is the creative mind behind our visual style, food presentation, and recipe storytelling.', 'images/hutao.jpg'),
							('Kazuha', 'Nutritionist', 'Kazuha ensures every dish is not only delicious but also nutritious, balancing flavor and health.', 'images/kazuha.jpg'),
							('Wanderer', 'Food Videographer', 'Wanderer brings recipes to life on screen, capturing every sizzle, stir, and smile with passion.', 'images/wanderer.jpg');";

	$runInsertData = mysqli_query($dbConnect, $insertTeamMemData);

	if (isset($runInsertData)) {
		echo "Data insertion into Team Member table succeed!";
	}
	else echo "Data insertion failed!";


	//contactMsg table creation
	$contactMsgTable = "Create Table ContactMsg (ID int Auto_Increment Primary Key, Username varchar(50), Email varchar(50), Subject varchar(30), Message text);";

	$runContactMsgTable = mysqli_query($dbConnect, $contactMsgTable);

	if (isset($runContactMsgTable)) {
		echo "Contact Message table is created!";
	}
	else echo "Table creation failed!";


	//recipe table creation
	$recipeTable = "Create Table Recipe (RecipeID int Auto_Increment Primary Key, Name varchar(255) NOT NULL, Cuisine varchar(100), Difficulty varchar(50), DietaryPreference varchar(100), Description text, RecipeImage Text);";

	$runRecipeTable = mysqli_query($dbConnect, $recipeTable);

	if (isset($runRecipeTable)) {
		echo "Recipe table is created!";
	}
	else echo "Table creation failed!";
?>