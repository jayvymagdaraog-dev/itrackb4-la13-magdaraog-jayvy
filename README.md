#LA13

J1. Your HomeController is not a resource controller. Name two things an index() on a resource controller does that yours does not have to.

My HomeController only handles the home page and displays the information needed. A resource controller also has methods for creating, storing, editing, updating, and deleting records. My HomeController does not need all those methods.

J2. Your pagination links lost the search term until you added one method. Say what those links contained before, and what the controller therefore received.

Before adding withQueryString(), the pagination links only contained the page number and lost the search term. The controller received the page number but did not receive the previous search value.

J3. A misspelled sort value does not break your page. Explain why that is worse than an error, and what your allowed list does about it.

A misspelled sort value is worse than an error because the page still loads but the movies may not be sorted correctly. The allowed list checks the sort value and uses title as the default if the value is invalid.