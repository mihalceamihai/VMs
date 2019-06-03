Magazin online vanzari masini

Contine urmatoarele pagini:
-pagina de home (acasa.php)
-pagina de autentificare(login.php)
-pagina de creare a unui cont nou (contnou.php)
-pagina de editare a profilului(Detaliicont.php)
-pagina de contact (contact.php)
-pagina ce permite listarea de produse(listaremasini.php)
-pagina pt detalierea unui produs (detprodus.php)
-pagina pt cosul de cumparaturi(cos.php)
-pagina pt istoric comenzi (istoric.php)
-pagina pt admin (admin.php)
-alte scripturi folosite in pagini


Pagina de home este acasa.php si contine:
-Bara de navigare cu urmatoarele functionalitati(bara am inclus-o de asemenea in fiecare pagina din website):
   -in mod client
	-sectiunea Acasa (care va redirecta de oriunde ai fi in site inapoi in pagina de home)
	-sectiunea Contact
	-sectiunea Contul meu : are 3 subsectiuni (in mod admin 4 ->pagina de admin) -> Iesire din cont (duce la pagina logout.php)	
       ->editare profil (detaliicont.php)
       ->cos (cos.php)
    - in mod vizitator 
	-buton pt login(login.php) 
	-acasa
	-contact
    -in mod admin -> la fel ca la client dar in sectiunea contul meu putem bifa sa  ajungem si in pagina dedicata adminului
-Sigla- in partea din stanga sus (am generat-o pe un site free de creeat logo-uri)
-Slogan : "E timpul pentru o noua ma?ina?"
-Un startbox: alcatuit din -3 butoane (Masini,Moto,Piese)
			   - input-uri pt diferite informatii referitoare la ceea ce doriti sa cautati	
			   -un buton de cautare
-imagini cu tipul specific caroseriei care redirecteaza catre pagina de listare masini care au caroseria specifica
-newsletter
-footer

 Pagina de autentificare(Login.php) contine:
-bara de navigare
-sigla
-footer
-un Loginbox alcatuit din:-o poza drept avatar pt user
			  -2 campuri pt introducerea username-ului si parolei
			  -buton de autentificare
			  -posibilitatea de a va crea cont daca nu ati avea prin link-ul "Nu am inca un cont! Creeaza-l acum!"  

Pagina de editare a profilului(detaliicont.php) contine:
-bara de navigare
-sigla
-footer
-un box pt editarea informatiilor :
		-posibilitatea de a schimba oricare dintre campurile personale (fotografie de profil,Nume,Prenume, Adresa de e-mail, Numar de telefon, Parola, Reintroducere Parola, data Nasterii, Sexul)

Pagina de creare a unui cont nou(Contnou.php) contine:
-bara de navigare
-sigla
-footer
-un box pentru completarea informatiilor personale(Nume,Prenume, Adresa de e-mail, Numar de telefon, Parola, Reintroducere Parola,Sexul,Data Nasterii (realizata prin 3 selecturi)) ,checkbox pt ca utilizatorul sa confirme ca e de acord cu politicile site-ului si un link de redirectare in cazul in care aveti deja cont

Pagina de contact (contact.php) contine:
-bara de navigare (in functie de modul in care functioneaza)
-sigla
-informatii de contact
-newsletter
-footer

Pagina de listare masini (listaremasini.php) contine:
-cea mai complexa pagina
-bara de navigare (in functie de modul in care functioneaza)
-sigla
-newsletter
-footer
-bara de selectare a optiunilor pt filtrare
-aici se face filtrarea in functie de optiunile selectate in pagina acasa sau in bara de optiuni 
-se vor afisa detalii legate de produs (poza, pret)
-butoane pt adaugare in cos 

 Pagina de detalierea unui produs:
-bara de navigare (in functie de modul in care functioneaza)
-sigla
-newsletter
-footer
-un slideshow cu imagini ale produsului
-buton de adaugare in cos
-specificatii produs

Pagina pt cosul de cumparaturi:
-listeaza produsele aflate in cos
-in dreapta este un aside ce cuprinda o lista a produselor cumparate
-pposibiltatea plasarii unei comenzi

Pagina pt istoric :
-listeaza toate produsele cumparate de un client anume
