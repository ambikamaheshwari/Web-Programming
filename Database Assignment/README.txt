You will take your text formatting code from Assignment 3 and organize it into a FormattedPost class. The class should have at a minimum a function that parses a line, a function that takes an entire string and iterates over it and returns the formatted version, and a function that returns the post output (which should be stored in a private variable); you can break it up even further if you want to. You should be storing the title in your class as well as the formatted version, and the unformatted version of the post. Store your class in its own file. In addition, you will be storing your data in a database this week.

You will be making several modifications to your text formatter to become a database driven, first round of blog posts:

Rather than being file driven, you will be giving users a form to submit where they put their title and content
When they submit their content, you will use JavaScript to check whether or not the form has title and content data
You will submit to a preview.php page, where you will show users their output, and provide them a form with the title and submitted content so that they may edit it again with any changes
Instead of storing your results in files, you will be storing your result in a database; you will store the formatted version and an unformatted version.
Instead of reader.php looking for a file, it will now take in an ID that corresponds to a database entry; you will display the formatted version stored in the database. (We are storing unformatted version so we can come back and more easily update entries in Assignments 5 and 6); for ids that are not in the database, show an error
You will submit the following files in a zip archive:

settings.php: you will place all database settings used in this file so that only one file has to be updated in order to use that database
export.sql: you will provide a SQL dump of your database and table
All other files mentioned above.
 