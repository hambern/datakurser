# CSS - Uppgift 5

I denna uppgift ska du få lära dig hur du lägger en filmer på din hemsida. Innan HTML5 var man tungen att använda sig av någon slags videospelare om man ville visa video på sin hemsida. Men nu har vi tillgång till betydligt smidigare metoder. Nu kan vi göra såhär:

~~~html
<video src="videos/basta_filmen.mp4" controls>
  Du har en för gammal webbläsare för att kunna se denna film
</video>
~~~

Vi kan till och med göra det såhär enkelt:

~~~html
<video src="videos/basta_filmen.mp4" controls></video>
~~~

Det videoformat som fungerar bäst är formatet `mp4`, alltså filmer komprimerade med`H.264`. Ett annat sätt att göra samma sak, är att använda `.ogg` medan man har `mp4` som backup är att göra såhär:

~~~html
<video controls>
  <source src="videos/basta_filmen.ogg" type="video/ogg">
  <source src="videos/basta_filmen.mp4" type="video/mp4">
  Du har en för gammal webbläsare för att kunna se denna film
</video>
~~~

Läs följande sidor innan du gör denna uppgift:

- <https://www.w3schools.com/html/html5_video.asp>
- <https://www.w3schools.com/html/html_youtube.asp>
- <https://www.w3schools.com/css/css_rwd_videos.asp>

## Instruktioner

1. Länka till stilmallen `style.css` i `index.html`
2. Gör en topplista över dina fem roligaste klipp. Skriv gärna en motivering till varför du tycker att videon är rolig också.
3. Minst ett av klippen i mappen `videos/` måste vara med på listan
4. Minst ett klipp måste du lägga till ifrån YouTube. Hur du gör det kan du läsa om här: https://support.google.com/youtube/answer/171780?hl=sv
5. Minst ett klipp måste du lägga till ifrån Vimeo. Hur du gör det kan du läsa om här: https://vimeo.zendesk.com/hc/en-us/articles/224969968-Embedding-videos-overview
6. Designa din topplista så att den blir snygg och funkar med såväl bred som smal skärm
7. Lämna in den på vklass
8. Lek vidare med din sida:

## Tips och tricks
- Testa att göra dina iframes responsiva. Mer om det kan du läsa här: https://www.w3schools.com/howto/howto_css_responsive_iframes.asp
- Testa att få en video att starta automatiskt: https://www.w3schools.com/html/html5_video.asp
- Prova att göra så att filmen loopas om och om igen: https://www.w3schools.com/html/html5_video.asp
- Försök också gärna göra filmerna svartvita: https://www.w3schools.com/cssref/css3_pr_filter.asp
- Testa gärna också att lägga en film som bakgrund: https://www.w3schools.com/howto/howto_css_fullscreen_video.asp

