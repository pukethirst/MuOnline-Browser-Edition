I recently found these files, but they are in portuguese. I can not find the enlish ones that were available years ago, all the download links are dead. 

Website Demo: http://www.abyssmuonline.com/browser/

MuOnline Browser Edition Discord: https://discord.gg/qjwJA9HUmx 

In my spare time I will be working on these files to translate and add to them. If you would like to contribute and make the project go faster please feel free to do so.

Current goals (In no particular order):
1) Translate to english
2) Modify/populate all shops to have appropriate items
3) Make all classes playable. Currently the summoner is totally unplayable as it has no way to deal any real damage to monsters. (Possibly disable summoner for now, save it for future expansions)
4) Add MG/DL at appropriate levels
5) Add all base game maps up to Lost Tower
6) Add base game events, Devils Square, Blood Castle
7) Class Change Quests
8) All sets up to red dragon/guardian/legendary
9) Set up an admin page to control settings.
	- Item editor (Add / Remove / Modify Items)
	- Account / Character editor
	- Ban / Unban system
	- Exp / Drop Rates / Etc
	- Shop Editor
10) Remove all branding - Change all logos to say MuOnline Browser Edition or something generic.

To Do List: https://github.com/pukethirst/MuOnline-Browser-Edition/projects/1

I want everything set up as the game would be originally in version .99 and disable everything else until needed. After the basic game is in place, I want to add content season by season with a way to enable / disable seasons content so admins can "release" updates to play through the seasons in order or stop at their favorite season easily.

Database - MySQL
1) Create a MySQL database for the game
2) Edit database.php with your database connection information
3) Restore the database using xmu.com.br.sql in SQL FILES
4) Upload all files (Except the SQL FILES folder (It's just not needed on the webserver.) to your webserver.

Here is some resources I found with information on the source code.

https://mmoasia.forumms.net/t8-release-mu-online-web-browser-version

https://forum.ragezone.com/f508/development-mu-online-web-browser-745179/