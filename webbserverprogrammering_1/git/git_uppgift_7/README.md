# Git - Uppgift 7

I denna uppgift ska du få lära dig hur `.gitignore` funkar och hur du kan få git att strunta i att indexera vissa filer och mappar, exempelvis tempfiler, loggar och dolda filer. Läs följande sidor på W3Schools:

- <https://www.w3schools.com/git/git_ignore.asp>

## Instruktioner

Till denna uppgift följer en mapp med en mängd olika filer. Din uppgift är att skapa en git-ignore-fil som gör följande:

1. Ladda ner mappen `files` som ligger i denna mapp
2. Ladda upp mappen `filer` till din server. Detta kan du göra med kommandot `scp` i Windows Poweshell: `scp -rP 3690 <sökvägen till filer-mappen> ditt_login@student.oedu.se:~/public_html/webbserverprogrammering_1/git/`
3. Dolda mappar och deras innehåll ska inte indexeras
4. Endast filerna `config.yaml` och `showme.jpg` i mappen `temp` ska indexeras
5. Alla filer i rooten ska indexeras förutom `powerpoint.pptx` och `ignore.jpg`

När du gittat in dina filer ska det alltså se ut såhär:

~~~
├── temp
    ├── config.yaml
    └── showme.jpg
├── kalkylark.xlsx
└── todo.log
~~~ 
