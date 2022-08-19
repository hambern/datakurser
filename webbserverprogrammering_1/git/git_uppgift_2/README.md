# GIT - Uppgift 2

I denna uppgift ska du skapa din användare på GitLab och synka det med ditt lokala repository

## Instruktioner

1. Fyll i uppgifterna på: https://gitlab.com/users/sign_up/. Ange gärna din privata epost-adress. Du kan exempelvis logga in via Google.
2. Välj "Create project" och döp ditt repository till "Webbserverprogrammering 1" och gör det gärna privat.
3. För att synka ditt repository på servern med det på GitLab måste du nu köra följande kommandon i terminalen:
    1. Gå in i mappen `webbserverprogrammering_1`
    3. `git remote add origin git@gitlab.com:ditt_användarnamn/webbserverprogrammering_1.git` för att koppla ditt lokala repository till det på GitLab
    6. `git push --set-upstream origin master` för att skapa din första branch och skicka upp din förändring
    7. Nu bör du kunna gå in på ditt repository på GitLab och hitta filen `README.md`
