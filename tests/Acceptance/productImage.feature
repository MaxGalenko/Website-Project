Feature: Add an image to my Products as Admin
	In order to show image with all products enlisted for sale
	As an Admin
	I need to be able to add image to each product

	Scenario: Add a Product Image for a New Product as Admin
		Given I am logged in as an Admin
		And I am on the main page
		When I click on the "Add Product" button
		And fill out the required fields for a new product
		And click on the "Add Image" button for the product
		And select an image file from my computer
		And click on the "Upload" button
		And click on the "Save" button
		Then I should see a success message indicating that the product was added with the image
		And the image should be displayed on the main page for customers to see.

	Scenario: Add a Product Image with Invalid File Format as Admin
		Given I am logged in as an Admin
		And I am on the main page
		When I click on the "Add Product" button
		And fill out the required fields for a new product
		And click on the "Add Image" button for the product
		And select a file that is not an image file (e.g. a Word document or PDF)
		And click on the "Upload" button
		Then I should see an error message indicating that the file format is not supported
		And the product should not have a new image associated with it.