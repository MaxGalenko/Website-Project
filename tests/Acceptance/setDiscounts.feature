Feature: Setting discounts
	In order to add discount for products
	As a Admin of the system
	I want to be able to add discounts and change the prices

	Scenario: Adding a discount
		Given I am logged into the system with admin status
		When I click on "Discount" button on the "Product" page
		And I specify the percentage on the textbox that pops up.
		Then I see "Price" change based on the "Discount"

	Scenario: Removing discount from the Catalog
		Given I am logged into the system with admin status
		When I click on "Discount" button on the "Product" page
		And I specify the percentage to be "0%" on the textbox that pops up.
		Then I see "Price" have no changes