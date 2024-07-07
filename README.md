 - OBBIETTIVO
Creare un progetto Laravel due pagine, una che stampi delle cards e una con un about per acquisire familiarità con i pattern suggeriti da Laravel per lavorare.

-------------------------------------------------------------------

 - MILESTONE 0
Creare e pushare il progetto Laravel.

-------------------------------------------------------------------

 - MILESTONE 1
Creare una vista per l'homepage che risponderà sia alla rotta "/" che a "/home" e pushare.

-------------------------------------------------------------------

 - MILESTONE 2
- Fare in modo di passare dei dati alla vista. Iniziare creando un array $data direttamente nella rotta.
- Inizialmente usare semplicemente un array con 3 stringhe da stampare, per testare che tutto funzioni e pushare.
- Passare al livello successivo usando uno store, bisognerà:
    1) Creare il file relativo, che farà return di un array associativo con tutti i dati. Rispetto a Vue cambia solo la sintassi.
    2) Importare il file, dove necessario, usando config("nomefile"), ad esempio nelle rotte. Pushare.
- Infine sostituite il vostro store con quello che trovate in allegato e.... poi cosa bisogna fare? 

-------------------------------------------------------------------

 - MILESTONE 3
Realizzare una vista about che responda ad una rotta, con contenuto a piacere.

-------------------------------------------------------------------
ESTENSIONE ESERCIZIO
-------------------------------------------------------------------

 - OBBIETTIVO
Padroneggiare conoscenze:
- usare dati in arrivo da config
- layout (con relativi @yield, @extends e @section)
- le rotte (con i relativi ->name)

-------------------------------------------------------------------

 - MILESTONE 0
- Assicuratevi di recuperare i dati dei fumetti da config("qualcosa") strutturando i dati correttamente.
- Assicuratevi anche di aver importato eventuali file statici da /public usando un percorso che inizi con /
(Esempio <link rel="stylesheet" href="style.css"> diventa <link rel="stylesheet" href="/style.css">)

-------------------------------------------------------------------

 - MILESTONE 1
Creare un layout di base da utilizzare in tutte le pagine. Ricordare gli elementi fondamentali:
- Creare un layout con l'html di base, in /resources/views/layouts/nomelayout.blade.php
- Prevedere nel layout almeno uno @yield("nomesegnaposto")
- Modificare le vostre pagine affinche usino il layout con @extends("percorso.layout")
- Customizzare il contenuto del layout per quella pagina usando @section

-------------------------------------------------------------------

 - MILESTONE 2
- Modificare l'header in modo che i link vengano generati usando {{ route("nomerotta") }}
Ovviamente questo richiederà che dare il ->name alle rotte
- Ora provare a usare Route::currentRouteName() per evidenziare la voce di menu attualmente attiva.