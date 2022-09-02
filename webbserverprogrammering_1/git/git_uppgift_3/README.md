# GIT - Uppgift 3

I denna uppgift ska du göra ändringar till din README-fil på GitLab och sedan hämta hem dessa ändringar till din lokala server

## Instruktioner

1. Använd din webbläsare och gå in på filen `README.md` på GitLab
2. Klicka på den blå knappen med texten "Open in Web-IDE"
3. Lägg till lite text i din fil. Du kan exempelvis klistra in detta innehåll:

~~~markdown
# Webbserverprogrammering 1

Kursen webbserverprogrammering 1 omfattar punkterna 1--8 under rubriken Ämnets syfte, med särskild betoning på punkt 1.

## Centralt innehåll

### Undervisningen i kursen ska behandla följande centrala innehåll:

- Webbserverns och dynamiska webbplatsers funktionalitet.
- Utvecklingsprocessen för ett webbtekniskt projekt med målsättningar, krav, begränsningar, planering och uppföljning. Specifikation av struktur och design, kodning, testning samt driftsättning.
- Dokumentation av utvecklingsprocess och färdig produkt.
- En översikt över olika lösningar eller språk som finns för att skapa dynamiska webbplatser.
- Grundfunktionen i ett programspråk för dynamiska webbplatser.
- Teknisk orientering om webbens protokoll, adresser, säkerhet samt samspelet mellan klient och server.
- Datalagring i relationsdatabas eller med annan teknik.
- Teckenkodning. Begrepp, standarder och handhavande.
- Kodning och dokumentation enligt vedertagen praxis för vald teknik.
- Applikationsarkitektur och separation av olika slags logik.
- Kvalitetssäkring av dynamiska webbapplikationers funktionalitet, säkerhet och kodkvalitet.
- Grundläggande säkerhet och sätt att identifiera hot och sårbarheter samt hur attacker kan motverkas genom effektiva åtgärder.
~~~

3. När du gjort dina ändringar kan du spara dina ändringar genom att klicka på den blå knappen med texten "Create commit..."
4. Välj "Commit to master branch" och klicka på "Commit"
5. Gå nu tillbaka och titta på ditt repository. Du har nu en del information om ditt repository på GitLab
6. För att få ner denna förändring till din server måste vi gå in på servern via "Start SSH Session..." och gå till mappen `webbserverprogrammering_1`
7. I den mappen skriver vi sedan `git pull`. Då borde vi se något i stil med detta:

~~~
remote: Enumerating objects: 5, done.
remote: Counting objects: 100% (5/5), done.
remote: Compressing objects: 100% (2/2), done.
remote: Total 3 (delta 0), reused 0 (delta 0), pack-reused 0
Unpacking objects: 100% (3/3), 884 bytes | 884.00 KiB/s, done.
From gitlab.com:ditt_användarnamn/webbserverprogrammering_1.git
   cab1152..2b882ca  master     -> origin/master
Updating cab1152..2b882ca
Fast-forward
 README.md | 20 ++++++++++++++++++++
 1 file changed, 20 insertions(+)
~~~

8. Nu kan du kontrollera så att du fått hem alla förändringar med kommandot `cat README.md`
