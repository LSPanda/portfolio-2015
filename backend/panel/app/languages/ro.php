<?php

return array(
  'title' => 'Română',
  'direction' => 'ltr',
  'author' => 'Structor <zabamarza@yahoo.com>',
  'version' => '2.1.0',
  'data' => array(

    // global
    'cancel' => 'Renunţă',
    'add' => 'Adaugă',
    'save' => 'Salvează',
    'saved' => 'Salvat!',
    'change' => 'Modifică',
    'delete' => 'Şterge',
    'insert' => 'Inserează',
    'ok' => 'Ok',

    // options (sidebar)
    'options.show' => 'Arată opţiunile',
    'options.hide' => 'Ascunde opţiunile',

    // installation
    'installation' => 'Instalare',
    'installation.check.headline' => 'Instalarea panoului de administrare',
    'installation.check.text' => 'Sistemul a întâmpinat următoarele probleme în timpul instalării:',
    'installation.check.retry' => 'Ignoră',
    'installation.check.error' => 'Sunt câteva probleme!',
    'installation.check.error.accounts' => 'Directorul <i>/site/accounts</i> nu are permisiuni de scriere.',
    'installation.check.error.avatars' => 'Directorul <i>/assets/avatars</i> nu are permisiuni de scriere.',
    'installation.check.error.blueprints' => 'Creează te rog directorul <i>/site/blueprints</i>!',
    'installation.check.error.content' => 'Directorul <i>/content</i> şi conţinutul lui trebuie să aibă permisiuni de scriere.',
    'installation.check.error.thumbs' => 'Directorul <i>/thumbs</i> trebuie să aibă permisiuni de scriere.',
    'installation.signup.username.label' => 'Creează primul cont de utilizator!',
    'installation.signup.username.placeholder' => 'Nume utilizator',
    'installation.signup.email.label' => 'Email',
    'installation.signup.email.placeholder' => 'email@exemplu.com',
    'installation.signup.password.label' => 'Parola',
    'installation.signup.language.label' => 'Limba',
    'installation.signup.button' => 'Creează contul',

    // login
    'login' => 'Conectare',
    'login.welcome' => 'Conectează-te cu numele de utilizator!',
    'login.username.label' => 'Nume utilizator',
    'login.password.label' => 'Parola',
    'login.error' => 'Nume de utilizator greşit, sau parolă invalidă.',
    'login.button' => 'Conectare',

    // logout
    'logout' => 'Deconectare',

    // dashboard
    'dashboard' => 'Panoul de control',
    'dashboard.index.pages.title' => 'Pagini',
    'dashboard.index.pages.edit' => 'Editează',
    'dashboard.index.pages.add' => 'Adaugă',
    'dashboard.index.site.title' => 'Adresa URL a saitului',
    'dashboard.index.account.title' => 'Contul tău',
    'dashboard.index.account.edit' => 'Editează',
    'dashboard.index.metatags.title' => 'Variabile sait',
    'dashboard.index.metatags.edit' => 'Editează',
    'dashboard.index.history.title' => 'Ultimele pagini modificate',
    'dashboard.index.history.text' => 'Paginile modificate recent vor fi afişate aici pentru a putea fi găsite uşor mai târziu.',
    'dashboard.index.license.title' => 'Licenţa Kirby',

    // metatags
    'metatags' => 'Variabile sait',
    'metatags.info' => 'Info Kirby',
    'metatags.license' => 'Licenţa Kirby',
    'metatags.version.toolkit' => 'Versiune Toolkit',
    'metatags.version.kirby' => 'Versiune Kirby',
    'metatags.version.panel' => 'Versiune Panel',
    'metatags.back' => 'Înapoi la panoul de control',
    'metatags.files' => 'Fişiere sait',

    // pages
    'pages.show.settings' => 'Setări pagină',
    'pages.show.preview' => 'Previzualizare',
    'pages.show.changeurl' => 'Modifică URL',
    'pages.show.invisible' => 'Status: invizibilă',
    'pages.show.visible' => 'Status: vizibilă',
    'pages.show.changes.text' => 'Există modificări nesalvate!',
    'pages.show.changes.button' => 'Renunţă',
    'pages.show.delete' => 'Şterge această pagină',
    'pages.show.subpages.title' => 'Pagini',
    'pages.show.subpages.edit' => 'Editează',
    'pages.show.subpages.add' => 'Adaugă',
    'pages.show.subpages.empty' => 'Această pagină nu are subpagini.',
    'pages.show.files.title' => 'Fişiere',
    'pages.show.files.edit' => 'Editează',
    'pages.show.files.add' => 'Adaugă',
    'pages.show.files.empty' => 'Această pagină nu conţine fişiere',
    'pages.show.error.permissions.title' => 'Pagina nu are permisiuni de scriere.',
    'pages.show.error.permissions.text'  => 'Verifică permisiunile directorului <i>/content</i> si a conţinutului său.',
    'pages.show.error.permissions.retry'  => 'Ignoră',
    'pages.show.error.notitle.title' => 'Şablonul nu conţine un câmp pentru titlu.',
    'pages.show.error.notitle.text' => 'Adaugă câmpul pentru titlu în şablon şi incearcă din nou.',
    'pages.show.error.notitle.retry' => 'Ignoră',
    'pages.show.error.form'  => 'Completează corect toate câmpurile, te rog!',

    'pages.add.title.label' => 'Adaugă o pagina nouă',
    'pages.add.title.placeholder' => 'Titlu',
    'pages.add.url.label' => 'Terminaţia URL',
    'pages.add.url.enter' => '(completează titlul)',
    'pages.add.url.close' => 'Închide',
    'pages.add.url.help' => 'Caractere permise: litere mici de la a la z, cifre şi cratime.',
    'pages.add.template.label' => 'Tip pagină',
    'pages.add.error.title' => 'Lipseşte titlul',
    'pages.add.error.template' => 'Nu a fost selectat tipul paginii!',
    'pages.add.error.max.headline' => 'Nu sunt permise pagini noi!',
    'pages.add.error.max.text' => 'A fost atins numărul maxim de subpagini pentru pagina aceasta.',
    'pages.url.uid.label' => 'Terminaţia URL',
    'pages.url.uid.label.option' => 'Foloseşte titlul',
    'pages.url.error.exists' => 'Există deja o pagină cu aceeaşi terminaţie URL!',
    'pages.url.error.move' => 'Terminaţia URL nu poate fi modificată!',
    'pages.toggle.publish' => 'Sigur vrei sa faci **vizibilă** această pagină?',
    'pages.toggle.hide' => 'Sigur vrei sa faci **invizibilă** această pagină?',
    'pages.delete.headline' => 'Sigur vrei sa ştergi această pagină?',
    'pages.delete.error.home.headline' => 'Pagina principală nu poate fi ştearsă!',
    'pages.delete.error.home.text' => 'Ai încercat să ştergi pagina principală a saitului. Acest lucru nu e posibil pentru că ar apărea efecte nedorite.',
    'pages.delete.error.error.headline' => 'Pagina de eroare nu poate fi ştearsă!',
    'pages.delete.error.error.text' => 'Ai încercat să ştergi pagina de eroare a saitului. Acest lucru nu e posibil pentru că ar apărea efecte nedorite.',
    'pages.delete.error.children.headline' => 'Pagina nu poate fi ştearsă!',
    'pages.delete.error.children.text' => 'Această pagină conţine subpagini şi nu poate fi ştearsă. Şterge te rog subpaginile mai întâi.',
    'pages.delete.error.blocked.headline' => 'Pagina nu poate fi ştearsă!',
    'pages.delete.error.blocked.text' => 'Această pagină este blocată şi nu poate fi ştearsă.',
    'pages.search.help' => 'Caută pagini în funcţie de URL. Navighează printre rezultatele afişate cu ajutorul săgeţilor de pe tastatură şi apasă <i>Enter</i> pentru a accesa pagina căutată.',
    'pages.search.noresults' => 'Nu există rezultate pentru căutarea făcută. Încearcă din nou folosind un URL diferit.',
    'pages.error.missing' => 'Pagina nu poate fi găsită!',

    // subpages
    'subpages' => 'Pagini',
    'subpages.index.headline' => 'Subpagini',
    'subpages.index.back' => 'Înapoi',
    'subpages.index.add' => 'Adaugă o pagină nouă',
    'subpages.index.add.first.text' => 'Această pagină nu conţine încă subpagini.',
    'subpages.index.add.first.button' => 'Adaugă o primă subpagină',
    'subpages.index.visible' => 'Pagini vizibile',
    'subpages.index.visible.help' => 'Trage aici pagini pentru a le face vizibile.',
    'subpages.index.invisible' => 'Pagini invizibile',
    'subpages.index.invisible.help' => 'Trage aici pagini pentru a le face invizibile.',
    'subpages.error.missing' => 'Pagina nu a putut fi găsită!',

    // files
    'files' => 'Fişiere',
    'files.index.headline' => 'Fişiere',
    'files.index.back' => 'Înapoi',
    'files.index.upload' => 'Încarcă un nou fişier',
    'files.index.upload.first.text' => 'Această pagină nu conţine încă niciun fişier.',
    'files.index.upload.first.button' => 'Încarcă un prim fişier',
    'files.index.edit' => 'Editează',
    'files.index.delete' => 'Şterge',
    'files.show.name.label' => 'Nume fişier',
    'files.show.info.label' => 'Tip / Mărime / Dimensiuni',
    'files.show.link.label' => 'Calea către imagine',
    'files.show.open' => 'Afişează / descarcă fişierul',
    'files.show.back' => 'Înapoi',
    'files.show.replace' => 'Înlocuieşte',
    'files.show.delete' => 'Şterge',
    'files.show.error.rename' => 'Fişierul nu a putut fi redenumit!',
    'files.show.error.form' => 'Completează toate câmpurile corect, te rog!',
    'files.upload.drop' => 'Trage fişiere aici…',
    'files.upload.click' => '…sau click pentru a le încărca',
    'files.replace.drop' => 'Trage un fişier aici…',
    'files.replace.click' => '…sau click pentru a-l înlocui',
    'files.replace.error.type' => 'Fişierul încărcat trebuie să fie de acelaşi tip!',
    'files.delete.headline' => 'Sigur vrei să ştergi acest fişier?',
    'files.error.missing.page' => 'Pagina nu a putut fi găsită!',
    'files.error.missing.file' => 'Fişierul nu a putut fi găsit!',

    // users
    'users' => 'Utilizatori',
    'users.index.headline' => 'Toţi utilizatorii',
    'users.index.add' => 'Adaugă un utilizator nou',
    'users.index.edit' => 'Editează',
    'users.index.delete' => 'Şterge',
    'users.form.username.label' => 'Nume utilizator',
    'users.form.username.placeholder' => 'Numele tău de utilizator',
    'users.form.username.help' => 'Caractere permise: litere mici de la a la z, cifre şi cratime.',
    'users.form.username.readonly' => 'Numele de utilizator nu poate fi schimbat!',
    'users.form.firstname.label' => 'Prenume',
    'users.form.lastname.label' => 'Nume',
    'users.form.email.label' => 'Email',
    'users.form.email.placeholder' => 'email@exemplu.com',
    'users.form.password.label' => 'Parola',
    'users.form.password.confirm.label' => 'Confirmare parolă',
    'users.form.password.new.label' => 'Parolă nouă',
    'users.form.password.new.confirm.label' => 'Confirmarea parolei noi',
    'users.form.password.new.help' => 'Lasă necompletat pentru a păstra parola curentă.',
    'users.form.language.label' => 'Limba',
    'users.form.role.label' => 'Rol',
    'users.form.options.headline' => 'Opţiuni cont',
    'users.form.options.message' => 'Trimite email',
    'users.form.options.delete' => 'Şterge contul',
    'users.form.avatar.headline' => 'Poza de profil',
    'users.form.avatar.upload' => 'Încarcă o poză de profil',
    'users.form.avatar.replace' => 'Înlocuieşte poza de profil',
    'users.form.avatar.delete' => 'Şterge poza de profil',
    'users.form.back' => 'Înapoi la utilizatori',
    'users.form.error.password.confirm' => 'Confirmă parola, te rog!',
    'users.form.error.update' => 'Contul de utilizator nu a putut fi actualizat!',
    'users.form.error.create' => 'Contul de utilizator nu a putut fi creat!',
    'users.form.error.permissions.title' => 'Directorul <i>/site/accounts</i> nu are permisiuni de scriere.',
    'users.form.error.permissions.text' => 'Verifică dacă directorul <i>/site/accounts</i> există şi are permisiuni de scriere.',
    'users.delete.headline' => 'Sigur vrei să ştergi acest cont de utilizator?',
    'users.delete.error' => 'Contul de utilizator nu a putut fi şters!',
    'users.avatar.drop' => 'Trage o poză de profil aici…',
    'users.avatar.click' => '…sau click pentru încărcare',
    'users.avatar.error.type' => 'Poţi încărca doar fişiere JPG, PNG sau GIF.',
    'users.avatar.error.folder.headline' => 'Directorul <i>/assets/avatars</i> nu are permisiuni de scriere.',
    'users.avatar.error.folder.text' => 'Verifică dacă directorul <i>/assets/avatars</i> există şi are permisiuni de scriere.',
    'users.avatar.delete.error' => 'Poza de profil nu a putut fi ştearsă!',
    'users.avatar.delete.success' => 'Poza de profil a fost ştearsă!',
    'users.error.missing' => 'Contul de utilizator nu a putut fi găsit!',

    // form fields
    'fields.required' => 'Obligatoriu',
    'fields.date.label' => 'Data',
    'fields.date.months' => array(
      'Ianuarie',
      'Februarie',
      'Martie',
      'Aprilie',
      'Mai',
      'Iunie',
      'Iulie',
      'August',
      'Septembrie',
      'Octombrie',
      'Noiembrie',
      'Decembrie'
    ),
    'fields.date.weekdays' => array(
      'Duminica',
      'Luni',
      'Marţi',
      'Miercuri',
      'Joi',
      'Vineri',
      'Sâmbătă'
    ),
    'fields.date.weekdays.short' => array(
      'Dum',
      'Lun',
      'Mar',
      'Mie',
      'Joi',
      'Vin',
      'Sâm'
    ),
    'fields.email.label' => 'Email',
    'fields.email.placeholder' => 'email@exemplu.com',
    'fields.number.label' => 'Număr',
    'fields.number.placeholder' => '#',
    'fields.page.label' => 'Pagină',
    'fields.page.placeholder' => 'calea/către/pagină',
    'fields.password.label' => 'Parola',
    'fields.structure.add' => 'Adaugă',
    'fields.structure.add.first' => 'Completează formularul!',
    'fields.structure.empty' => 'Nicio inserţie.',
    'fields.structure.cancel' => 'Renunţă',
    'fields.structure.save' => 'Salvează',
    'fields.structure.edit' => 'Editează',
    'fields.structure.delete' => 'Şterge',
    'fields.tags.label' => 'Etichete',
    'fields.tel.label' => 'Telefon',
    'fields.textarea.buttons.bold.label' => 'Text îngroşat',
    'fields.textarea.buttons.bold.text' => 'Text îngroşat',
    'fields.textarea.buttons.italic.label' => 'Text înclinat',
    'fields.textarea.buttons.italic.text' => 'Text înclinat',
    'fields.textarea.buttons.link.label' => 'Link',
    'fields.textarea.buttons.email.label' => 'Email',
    'fields.textarea.buttons.image.label' => 'Imagine',
    'fields.textarea.buttons.file.label' => 'Fişier',
    'fields.toggle.yes' => 'Da',
    'fields.toggle.no' => 'Nu',
    'fields.toggle.on' => 'On',
    'fields.toggle.off' => 'Off',

    // textarea overlays
    'editor.link.url.label' => 'Inserează URL',
    'editor.link.text.label' => 'Link text',
    'editor.link.text.help' => 'Linkul text este opţional.',
    'editor.email.address.label' => 'Inserează adresa email',
    'editor.email.address.placeholder' => 'email@exemplu.com',
    'editor.email.text.label' => 'Link text',
    'editor.email.text.help' => 'Linkul text este opţional.',
    'editor.file.empty' => 'Această pagină nu conţine fişiere.',
    'editor.image.empty' => 'Această pagină nu conţine imagini.',

    // error page
    'error' => 'Eroare',
    'error.headline' => 'Eroare',

  )
);
