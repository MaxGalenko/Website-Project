Feature: Manage Orders
	In order to manage orders and mark them as completed
	As an Admin
	I want to manage orders

	Scenario: Mark an Order as Completed
		Given I am logged in as an Admin
		And I am on the "Orders" page
		And there is an order with status "in progress"
		When I click on the "Mark as Completed" button for that order
		Then the order status should change to "completed"

	Scenario: View Completed Orders
		Given I am logged in as an Admin
		When I am on the "Orders" page
		Then I should see a list of completed orders
		And I should see the following details for each order: order number, customer name, order status, and total amount