# mascarade-bdx
Main mascarade website

---

## 🧠 Fichiers PHP clés

- `head.php` : métadonnées, styles CSS conditionnels, Leaflet.
- `header.php` : logo, menu de langues (préparé mais pas encore activé).
- `nav.php` : génération dynamique du menu principal via `ViewMenu`.
- `main.php` : contrôleur central. Affiche une page ou toutes selon `$singlePage`.
- `footer.php` : contacts, menu répété, réseaux sociaux dynamiques.
- `view_menus.php` : classe `ViewMenu` générant les menus HTML.
- `menu.js` : gère le menu responsive (burger + icône croix).
- `menu.json` : structure du menu principal.

---

## 🔒 Sécurité et bonnes pratiques

- Protection contre l'injection via `htmlspecialchars()` sur tous les paramètres.
- Vérification du nom de page avec une regex dans `main.php`.
- Utilisation de `require_once(__DIR__ . '/...')` pour fiabilité des chemins.
- Ajout de `rel="noopener noreferrer"` pour les liens `target="_blank"`.

---

## 🚧 À venir

- Finition du système CSS (header, menu, responsive, etc.).
- Intégration de la page **events** (cœur du site).
- Amélioration progressive de l’accessibilité.
- Gestion d’une **page 404 personnalisée**.
- Déploiement et test en ligne.

---

## 📌 Notes

- Le site est **monolingue pour l’instant**, mais la structure est prête pour du multilingue (`?lang=fr`, etc.).
- La navigation peut être **multi-pages** ou **single-page**, en fonction de la valeur de `$singlePage`.

---

## 🧩 Dépendances externes

- [Leaflet](https://leafletjs.com/) pour les cartes interactives (chargé via CDN).

---

Si tu veux que ce `README.md` reflète exactement ta structure de dossiers, n'hésite pas à me copier l’arborescence exacte, et je te le réajuste.

On continue demain avec les CSS et la page events ! 💪

