Feature: Behat works
  in order to create my BDD project
  As a developper
  I need to see that Behat can see my symfony app

   #@ to enable selenium
  @javascript
  Scenario: Access to home page
    Given I am on "/"
    Then I should see "welcome to symfony"

  #@ to enable selenium
  @javascript
  Scenario: Access to documentation
    Given I am on "/"
    When I follow "a"
    Then I should see "Create your First Page in Symfony"
