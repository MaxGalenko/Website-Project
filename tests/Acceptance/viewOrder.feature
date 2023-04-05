Feature: Order Viewing
	In order to view the status of my order and get updates
	As a user
	I want to be able to view my order

	Scenario: View Order
		Given I have placed an order
		When I log in to my account
		And navigate to my order history
		Then I should be able to see my order details
		And I should be able to see the status of my order

	Scenario: Order Updates
		Given I am viewing my order details
		When the status of my order changes
		Then I should receive a notification of the status change
		And I should be able to view the updated status in my order history