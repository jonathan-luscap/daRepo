# daRepo

**Methodologie**:

Le développement se fait sur la branche 'dev'.

Le projet est decoupé en "issues" qui correspondront à des fonctionnalités, des réparations ou des tâches. Pour débuter le traitement de l'issue, on crée une nouvelle branche, à partir de la branche 'dev', qui sera nommée :
- build
- feat   /#<numéro de l'issue>/<énoncé de l'issue>
- fix

Au moins un commit doit être opéré par issue avant de merger sur la branche 'dev'.
Une fois merger, on detruit la branche.

Les message des commit doivent être structurés comme suit :

{type}(étendue optionnelle): {description} #<numéro de l'issue>

(corps optionnel)

(pied optionnel)
