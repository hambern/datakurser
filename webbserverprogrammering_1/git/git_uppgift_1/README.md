# GIT - Uppgift 1

I denna uppgift ska du skapa ditt första lokala git-repository. Läs följande innan du sätter igång:

- <https://www.w3schools.com/git/git_getstarted.asp?remote=gitlab>
- <https://www.w3schools.com/git/git_new_files.asp?remote=gitlab>
- <https://www.w3schools.com/git/git_staging_environment.asp?remote=gitlab>
- <https://www.w3schools.com/git/git_commit.asp?remote=gitlab>

## Instruktioner

1. Logga in på din skolserver via SSH på terminalen. Detta kan du exempelvis göra via PhpStorm `Tools > Start SSH Session...`
2. Testa din version av git genom kommandot `git --version`. Du bör exempelvis få svaret `git version 2.25.1`
3. Gå till din mapp `public_html` med kommandot `cd public_html`
4. Där kan du sedan skapa en mapp som exempelvis kan heta `webbserverprogrammering_1` med kommandot `mkdir webbserverprogrammering_1`
5. Gå därefter in i den skapade mappen med kommandot `cd webbserverprogrammering_1`
6. Skapa där ett git-repository med kommandot `git init -b main`. Egentligen behövs inte det sista. Anledningen till att vi lägger till "-b main" är för att det ska fungera bättre ihop med GitLab i nästa uppgift.
7. Skapa en fil som heter `README.md` (så vi har något att versionshantera) med kommandot `touch README.md`. Skriv `git status` och se vad som händer.
8. `git add --all` för att versionshantera alla filer i mappen. Skriv `git status` och se vad som hänt.
9. `git commit -m "Initial commit"` för att skapa din första förändring. Skriv `git status` och se vad som hänt.
10. Skriv `git status` igen och kontrollera så att det står "nothing to commit, working tree clean"
