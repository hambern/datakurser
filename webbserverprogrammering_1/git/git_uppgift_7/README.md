# Git - Uppgift 7

I denna uppgift ska du få lära dig hur `.gitignore` funkar och hur du kan få git att strunta i att indexera vissa filer och mappar, exempelvis tempfiler, loggar och dolda filer. Läs följande sidor på W3Schools:

- <https://www.w3schools.com/git/git_ignore.asp>

## Instruktioner

1. Ladda ner mappen `filer` som ligger i denna mapp
2. Ladda upp mappen `filer` till din server. Detta kan du göra med kommandot `scp` i Windows Poweshell: `scp -rP 3690 sökvägen_till_filer-mappen ditt_login@student.oedu.se:~/`. Lägg den direkt i rooten på din användare för att undvika konflikter med dina övriga repositories
3. Initiera ett git-repository i mappen med `git init` och använd sedan `git status -u` för att hela tiden kontrollera vilka filer git vill indexera
4. Skapa en `.gitignore`-fil i filer-mallen och skriv in de regler som behövs för följande:
    - Dolda mappar och deras innehåll ska inte indexeras (alla filer och mappar som inleds med en punkt)
    - Endast filerna `config.yaml` och `showme.jpg` i mappen `temp` ska indexeras
    - Alla filer i rooten ska indexeras förutom `powerpoint.pptx` och `ignore.jpg`

När du gittat in dina filer ska det alltså se ut såhär:

~~~
├── temp
    ├── config.yaml
    └── showme.jpg
├── kalkylark.xlsx
└── todo.log
~~~ 

**Tips:** Försök skriva så generella regler som möjligt. Ju färre rader i `.gitignore` desto bättre
