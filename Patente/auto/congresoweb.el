(TeX-add-style-hook
 "congresoweb"
 (lambda ()
   (TeX-add-to-alist 'LaTeX-provided-class-options
                     '(("article" "a4paper" "14px")))
   (TeX-add-to-alist 'LaTeX-provided-package-options
                     '(("geometry" "left=2cm" "right=2cm" "top=2cm" "bottom=2cm")))
   (TeX-run-style-hooks
    "latex2e"
    "article"
    "art10"
    "geometry"
    "graphicx"
    "float")
   (LaTeX-add-labels
    "sec:antecedente"
    "sec:descripcion-de-la"
    "fig:arquitectura"
    "sec:pagina-principal"
    "fig:arquitectura1"
    "fig:arquitectura2"
    "fig:presentacion"
    "fig:tematicas1"
    "fig:tematicas2"))
 :latex)

