(TeX-add-style-hook
 "congresoweb"
 (lambda ()
   (TeX-add-to-alist 'LaTeX-provided-class-options
                     '(("article" "a4paper" "14px")))
   (TeX-add-to-alist 'LaTeX-provided-package-options
                     '(("geometry" "textwidth=450.0pt" "textheight=680.0pt" "left=95.27pt" "right=1.5cm" "bottom=2.5cm" "footskip=30pt" "includemp" "includehead") ("fontenc" "T1") ("inputenc" "utf8")))
   (TeX-run-style-hooks
    "latex2e"
    "article"
    "art10"
    "geometry"
    "graphicx"
    "float"
    "fontenc"
    "inputenc"
    "mathptmx")
   (LaTeX-add-labels
    "sec:antecedente"
    "sec:objetivo"
    "sec:objetivo-general"
    "sec:objet-espec"
    "sec:descripcion-de-la"
    "sec:arqu-de-sitio"
    "fig:arquitectura"
    "sec:nombres-del-dominio"
    "sec:prov-de-serv"
    "sec:plan-que-se"
    "sec:pagina-principal"
    "fig:arquitectura1"
    "fig:arquitectura2"
    "fig:presentacion"
    "fig:tematicas1"
    "fig:tematicas2"
    "fig:conferensistas"
    "fig:bibliografia"
    "fig:comite1"
    "fig:comite2"))
 :latex)

