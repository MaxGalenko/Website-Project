Feature: Update or remove image to existing Products as Admin
	In order to update or remove image associated to products enlisted for sale
	As an Admin
	I need to be able to remove or change image to each product

	Scenario: Remove a Product Image as Admin
		Given I am logged in as an Admin
		And I am on the main page
		When I click on the "Edit Product" button for an existing product
		And click on the "Remove Image" button for an existing product image
		And click on the "Save" button
		Then I should see a success message indicating that the image was removed
		And the product should no longer have the removed image associated with it.

	Scenario: Update a Product Image as Admin
		Given I am logged in as an Admin
		And I am on the main page
		When I click on the "Edit Product" button for an existing product
		And click on the "Edit Image" button for an existing product image
		And select a new image file from my computer
		And click on the "Upload" button
		And click on the "Save" button
		Then I should see a success message indicating that the image was updated
		And the product should have the updated image associated with it.