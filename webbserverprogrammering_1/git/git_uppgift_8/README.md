# Git - Uppgift 8

I denna uppgift ska du skapa ett git-repository, med en gitignore-fil för din Java-kod i Programmering 2-kursen. Läs gärna följande delar:

- <https://www.w3schools.com/git/git_remote_getstarted.asp?remote=gitlab>
- <https://www.w3schools.com/git/git_push_to_remote.asp?remote=gitlab>

## Instruktioner

1. Börja med att ladda ner och installera [Git för Windows 10](https://gitforwindows.org/)
2. Skapa ett nytt projekt på [Gitlab](https://gitlab.com/) för din Java-kod. Titta gärna på [git_uppgift_2](/webbserverprogrammering_1/git/git_uppgift_2) för tips.
3. Döp projektet till "Prog 2 - ditt_användarnamn" (Prog 2 - mh6802). Som beskrivning av projektet skriver du ditt fullständiga namn
4. Gör Daniel Viström [@danieloeduse](https://gitlab.com/danieloeduse) till "reporter" på ditt projekt
5. Skapa en `.gitigore`-fil som innehåller följande kod:
~~~
*.class
*.jar
.idea
.metadata
.recommenders
*.dat
# etc...
~~~
6. Pusha upp den kod du skapat i Programmering 2 till det nya projektet
7. När du testat så att du fått med alla filer kan du meddela Daniel varpå han kan kontrollera att det fungerar.