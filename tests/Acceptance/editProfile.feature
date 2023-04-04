Feature: edit my profile
	As a registered user of the system
	In order to modify my personal information
	I want to be able to edit my profile

	Scenario: Successfully editing user profile
		Given I am logged into the system
		When I click on the "Edit Profile" button
		And I am taken to the "Edit Profile" page
		And I modify the desired fields with valid information
		And I click on the "Save Changes" button
		Then I should see a message confirming that my profile has been successfully updated
		And my updated information should be displayed on my profile page

	Scenario: Canceling profile edits
		Given I am logged into the system
		When I click on the "Edit Profile" button
		And I am taken to the "Edit Profile" page
		And I modify the desired fields with valid information
		And I click on the "Cancel" button
		Then I should see a message confirming that no changes have been made
		And my original information should still be displayed on my profile page

	Scenario: Invalid profile information
		Given I am logged into the system
		When I click on the "Edit Profile" button
		And I am taken to the "Edit Profile" page
		And I enter invalid information in one or more fields
		And I click on the "Save Changes" button
		Then I should see an error message indicating that the information is invalid
		And I should be prompted to correct the errors and try again