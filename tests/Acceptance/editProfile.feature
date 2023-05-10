Feature: Edit User Profile
	As a registered user of the system
	In order to modify my personal information
	I want to be able to edit my profile

	Scenario: Successfully editing user profile
		Given I am on "http://localhost/" page
		When I click ".bi-door-closed"
		Then I am on "http://localhost/User/index" page
		And I input "banana2" in "username"
		And I input "123" in "password"
		And I click "action"
		Then I am on "http://localhost/Main/index" page
		And I click "#profileStuff"
		Then I am on "http://localhost/Profile/index" page
		And I click "edit"
		Then I am on "http://localhost/Profile/editProfileInfo" page
		And I input "FriedNoodles" in "first_name_edit"
		And I click "action"
		Then I am on "http://localhost/Profile/index" page
		And I see "FriedNoodles"