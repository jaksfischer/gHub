<h2>How to start</h2>

<ul>
    <li>First Step:
        <ul>
            <li>Clone repository to your PC</li>
        </ul>
    </li>
    <li>Second Step:
        <ul>
            <li>Run the command: composer install</li>
        </ul>
    </li>
    <li>Third Step:
        <ul>
            <li>IMPORTANT STEP! Now you have to create a new access token to your project, put this on AuthenticationController.php on functions searchUser() and repos(), follow link: <a href="https://github.com/settings/tokens" target="_blank">GitHub Tokens</a>
        </ul>
    </li>
    <li>Fourth Step:
        <ul>
            <li>Now, create a new database called github, next you have to run the migrations to your project. Run the command: php artisan migrate</li>
            <li>Then, create a new file called .env and copy this <a href="https://gist.github.com/jaksfischer/63ae8eda5331cf47bc39a47e19513875">gist</a> and change your database information to connect in the project.</li>
        </ul>
    </li>
    <li>Fifth Step:
        <ul>
            <li>To start the project you have to open a CMD window, next you have to go in the project file and run the command: php artisan serve</li>
        </ul>
    </li>
    <li> Sixth Step:
        <ul>
            <li>Now open your browser and type in adress bar: localhost:8000</li>
        </ul>
    </li>
</ul>
<hr />
<h2>About the Project</h2>
<p>This is a public repository. The project consists of a small system developed in laravel wich you can search for an user's name and receive information on one's repositories available on github.

In the code, in the functions "searchUser()" and "repos()" there is an "Authorization: Bearer --CreateThisOnGitHub", you must add this information, for that, you must create it on gitHub, as requested in the GitHub for documentation Developers.</p>
<p>Development date: 19/12/2021</p>
<hr />
<p>MIT License</p>
