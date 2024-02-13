12/02/2024:
esercizio di oggi:
nome repo: laravel-comics

Create un nuovo progetto Laravel. Create le pagine includendo header e footer tramite due partials.
Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.

Bonus:
Create più pagine istituzionali nelle quali importare sia header che footer. Decidete voi cosa mostrare  al loro interno.

13/02/24:
proseguite con l'esercizio di ieri, stessa repo. Dovete replicare quanto visto a lezione, quindi fare in modo che la pagina con l'elenco dei fumetti e quella del dettaglio del fumetto estendano un layout. 
La pagina del dettaglio del fumetto la dovete creare, così come dovete creare la rotta nel file web.php

Occhio al passaggio di parametri ed a come recuperare l'elemento dell'array. Poichè è sconsigliato usare il titolo, seguite i passi visti a lezione: aggiungete un id ad ogni fumetto, con un valore incrementale (mi raccomando: no valori ripetuti per l'id). Per recuperare il singolo fumetto usate uno dei due metodi visti (foreach classico oppure array_filter + array_values).