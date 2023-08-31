# GIT - Uppgift 1

I denna uppgift ska du skapa ditt första lokala git-repository. Läs följande innan du sätter igång:

- <https://www.w3schools.com/git/git_getstarted.asp?remote=gitlab>
- <https://www.w3schools.com/git/git_new_files.asp?remote=gitlab>
- <https://www.w3schools.com/git/git_staging_environment.asp?remote=gitlab>
- <https://www.w3schools.com/git/git_commit.asp?remote=gitlab>

## Instruktioner

1. Logga in på din skolserver via SSH på terminalen
2. Testa din version av git genom kommandot `git --version`. Du bör exempelvis få svaret `git version 2.25.1`
3. Gå till din mapp `public_html` med kommandot `cd public_html`
4. Där kan du sedan skapa en mapp som exempelvis kan heta `webbserverprogrammering_1` med kommandot `mkdir webbserverprogrammering_1`
5. Gå därefter in i den skapade mappen med kommandot `cd webbserverprogrammering_1`
6. Skapa där ett git-repository med kommandot `git init`. Du kommer nu få en mapp som heter ".git". Denna håller koll på förändringarna i filerna.
7. Skapa en fil som heter `README.md` (så vi har något att versionshantera) med kommandot `touch README.md`. Skriv `git status` och se vad som händer.
8. `git add .` för att versionshantera alla filer i mappen. Skriv `git status` och se vad som hänt.
9. `git commit -m "Initial commit"` för att skapa din första förändring. Skriv `git status` och se vad som hänt.
10. Skriv `git status` igen och kontrollera så att det står "nothing to commit, working tree clean"
11. Slutligen, döp om branchens till "main" istället för "master" för att funka bättre med GitLab med kommandot `git branch -m main`.