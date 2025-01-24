# Descripció del projecte

El projecte **VideosApp** consisteix en la creació d'una aplicació web similar a YouTube, on es gestionaran usuaris, vídeos i llistes. A través de diversos sprints, s'implementaran les funcionalitats bàsiques de l'aplicació, incloent la creació i visualització de vídeos, gestió d'usuaris i altres operacions relacionades amb la visualització de contingut.

---

## Sprint 1: Creació del projecte i configuració inicial

### 1. Creació del projecte
Es va crear un projecte Laravel anomenat **'VideosAppPau'**, configurant els següents elements:

- **Jetstream amb Livewire**: Per gestionar l'autenticació i les interaccions dinàmiques.
- **PHPUnit**: Per realitzar proves unitàries.
- **Teams**: Per gestionar equips d'usuaris dins de l'aplicació.
- **SQLite**: Com a base de dades temporal per al desenvolupament inicial.

### 2. Test de helpers
Es va crear un test per verificar la creació de dos tipus d'usuari:

- **Usuari per defecte** amb camps com `name`, `email` i `password`.
- **Usuari professor**, també amb la mateixa estructura.

A més, la contrasenya es va encriptar i els usuaris es van associar a un equip per defecte.

### 3. Configuració de helpers i credencials
Es van crear **helpers** dins la carpeta `app` per facilitar tasques repetitives, i es va configurar el fitxer `config` per utilitzar les credencials d'usuaris per defecte carregades des del fitxer `.env`.

---

## Sprint 2: Migracions, models i proves

### 1. Correcció d'errors
Es van corregir diversos errors detectats durant el primer sprint, incloent l'ús d'una base de dades temporal per als tests, el que va permetre garantir un entorn net i controlat per les proves.

### 2. Migració de vídeos
Es va crear una migració per a la taula de **vídeos** amb els següents camps:

- **id**: Identificador únic del vídeo.
- **title**: Títol del vídeo.
- **description**: Descripció del vídeo.
- **url**: Enllaç al vídeo.
- **published_at**: Data de publicació.
- **previous**: Referència al vídeo anterior (si escau).
- **next**: Referència al vídeo següent (si escau).
- **series_id**: Identificador de la sèrie a la qual pertany el vídeo.

### 3. Controlador i model de vídeos
Es va implementar el controlador **VideosController** amb dues funcions principals:

- **testedBy**: Per realitzar proves específiques associades als vídeos.
- **show**: Per mostrar un vídeo específic.

A més, es va crear el model de **Vídeos** amb funcions per formatar les dates de publicació utilitzant la llibreria **Carbon**.

### 4. Helpers de vídeos per defecte
Es va crear un helper per afegir vídeos per defecte a la base de dades, facilitant així les proves i el desenvolupament inicial.

### 5. Afegir usuaris i vídeos per defecte
Es va configurar el **DatabaseSeeder** per afegir usuaris i vídeos per defecte a la base de dades, assegurant-se que l'aplicació disposés de dades de prova per als tests.

### 6. Creació de layout i rutes
Es va crear el layout **VideosAppLayout**, que es va utilitzar per estructurar les vistes de l'aplicació. A més, es van definir les rutes per mostrar els vídeos en el frontend.

### 7. Proves de vídeos
Es van crear diverses proves per garantir el correcte funcionament de les funcionalitats de vídeos, incloent:

- Creació de vídeos per defecte.
- Visualització correcta dels vídeos.
- Accés als vídeos per part dels usuaris, incloent proves de permisos i validacions de l'usuari autenticat.

---

**Conclusió:**
Amb aquests dos sprints s'ha aconseguit establir la base de l'aplicació **VideosApp**, creant els fonaments per gestionar usuaris, vídeos i la visualització de contingut de manera estructurada. Els pròxims passos implicaran la implementació de noves funcionalitats i millores en l'experiència d'usuari.

