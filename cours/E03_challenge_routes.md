# Routes

## Sprint 1

| URL | HTTP Method | Controller | Method | Title | Content | Comment |
|--|--|--|--|--|--|--|
| `/` | `GET` | `MainController` | `homeAction` | Dans les shoe | 5 categories | - |
| `/mentions-legales` | `GET` | `MainController` | `legalNoticeAction` | Mentions légales | Legal notice | - |
| `/catalogue/categorie/[id]` | `GET` | `CatalogController` | `categoryAction` | #Name of the category# | List of products attached to the category | [id] represents the id of the category |
| `/catalogue/type/[id]` | `GET` | `CatalogController` | `typeAction` | #Name of the type# | List of products attached to the type | [id] represents the id of the type |
| `/catalogue/marque/[id]` | `GET` | `CatalogController` | `brandAction` | #Name of the brand# | List of products attached to the brand | [id] represents the id of the brand |
| `/catalogue/produit/[id]` | `GET` | `CatalogController` | `productAction` | #Product name# | Product details | [id] represents le id of the product |
| `/public-url/with-sub-folder/[and-dynamic-part]` | `GET` ou `POST` | `ControllerName` | `methodName` | Titre de la page | Description of page's content | Explain here the dynamics parts of your URL (`[]`) |