# Linux - Uppgift 5

I denna uppgift ska du få lära dig att söka i filer och mappar med hjälp av terminalen. Utför nedanstående undersökningar en i taget och skriv ner svaren på frågorna i en markdownfil med namnet `linux_uppgift_5.md` i mappen `linux/` i din webbserverutveckligs-mapp. Gitta därefter in den på ditt repository.

## Hitta filer

För att hitta filer i Linux kan du använda dig av kommandot `find`: <https://www.hostinger.com/tutorials/how-to-use-find-and-locate-commands-in-linux/>

1. Testa och förklara skillnaden på dessa kommandon:
    1. `find ~mh6802/public -name "person"` 
    2. `find ~mh6802/public -name 'person*'`
    3. `find ~mh6802/public -name 'person.*'`
2. Hur kan du skapa ett kommando för att hitta alla filer av typen `.txt` under min användare?
3. Använd en omdirigering av standard output för att skriva in sökresultatet i en fil med namnet `finds` i din linux-mapp

## Hitta rader i en fil

För att söka i enstaka filer i Linux kan du använda dig av kommandot `grep`: <https://www.hostinger.com/tutorials/grep-command-in-linux-useful-examples/>

4. På min användare `mh6802` finns det i mappen `public` en fil som heter `folk`. Vad händer när du kör kommandot `grep "Sven" ~mh6802/public/folk`?
5. Jämför ovanstående resultat med resultatet av `grep -w "Sven" ~mh6802/public/folk`. Vad är skillnaden?
6. Vad gör kommandot `grep -c "Sven" ~mh6802/public/folk`?
7. Vilket av följande namn är vanligast på listan?
    1. Sven
    2. Karl
    3. Linda
8. Hur ska du skriva för att skapa filen `sven` under din egen mapp `linux` där du bara listar de personer som har namn som innehåller "sven"?

## Lämna in

- Gitta in dina ändringar och kopiera url:en till `linux_uppgift_5.md`
- Lämna in den länken på uppgiften `linux_uppgift_5` på Vklass
