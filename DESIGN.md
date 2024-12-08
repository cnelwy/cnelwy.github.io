To start this project, I surveyed bathrooms from many buildings in Harvard Yard and collected data regarding their layout and accessibility, then compiled my findings in bathroom_data.csv for later access. Then, my index.html file creates the homepage of my website, where the user completes the survey to get their bathroom recommendation. In index.html, I used HTML to create the dropdown menu for the buildings and the radio button survey questions. I used CSS to style the homepage (color, font, header) and JavaScript to create an event pop-up once the user clicks the submit button. On this pop-up, the user gets their bathroom recommendation. 

Behind the scenes, I used PHP in save_to_csv.php to store the user's responses in responses.csv so that I could parse the file and check what the user responded against the data I collected to use logical statements like 

if  ((is_single & has_button) || (!is_single & has_big_stall & has_button))
     is_accessible = True;

to recommend an appropriate bathroom in the pop-up. 

NB: upon getting my code ready to submit, I am finding a very dire problem in that the file I wrote my Java code in to parse the csv file and do the backend code has disappeared. I have frantically checked all places but cannot find this file. I unfortunately do not have the time to do this all over again. I hope that the sentiment suffices. Apologies for this mess.
