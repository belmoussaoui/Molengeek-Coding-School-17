% !TEX encoding = UTF-8 Unicode

\NeedsTeXFormat{LaTeX2e}
\ProvidesPackage{emb}[2017/01/28, IV]
\LoadClass[a4paper, 11pt, draft, notitlepage, oneside]{article}

% extensions
\RequirePackage[utf8]{inputenc}
\RequirePackage[T1]{fontenc}
\RequirePackage[francais]{babel}
\RequirePackage{graphicx}\graphicspath{{images/}}
\RequirePackage[top=1cm, bottom=3cm, left=2cm, right=2cm, includehead, includefoot]{geometry} %  showframe
\RequirePackage{hyperref}
\RequirePackage[explicit]{titlesec}
\RequirePackage{fancyhdr}\pagestyle{fancy}
\RequirePackage{xcolor}\RequirePackage{theme} % 5 couleurs
\RequirePackage{tikz}
\RequirePackage{times} % police d'écriture
\RequirePackage{lastpage}
\RequirePackage{enumitem} % puce à liste
\RequirePackage{multicol}
\RequirePackage{transparent}

% commandes personnelles
\newcommand{\imp}[1]{\textcolor{color5}{\bfseries\emph{#1}}} % mots importants
\newcommand{\name}[1]{\textcolor{color2}{\textbf{#1}}}
\newcommand{\cit}[2]{\textcolor{color2}{« \textit{#1} »}\footnote{\textcolor{color1}{#2}}}
\newcommand{\mail}{\textcolor{color3}{\textit{\href{mailto:emb-12@outlook.com}{emb-12@outlook.be}}}}
\newcommand{\site}[1]{\small{\textcolor{color3}{\textit{\url{#1}}}}}

% mise en page
\setlength{\headheight}{60pt}
\setlength{\footskip}{20pt}

% en-tête pour la première page
\fancypagestyle{firstpage}{
	\fancyhf{}
	\fancyhead[R]{\textcolor{color1}{\small\sffamily\bfseries\textsc{Coding School 17}}}
	\fancyhead[L]{\includegraphics[scale=.15]{molengeek-logo-2.png}}
	\fancyfoot[R]{}
	\fancyfoot[C]{\vskip -0cm\textcolor{color1}{--~\thepage / \pageref{LastPage}~--}}
}

% en-tête basique
\renewcommand{\sectionmark}[1]{\markboth{#1}{}}
\fancyhead[R]{}
\fancyhead[L]{\textcolor{color1}{\large\sffamily\bfseries\textsc{\MakeUppercase{\leftmark}}}}
\fancyfoot[R]{}
\fancyfoot[C]{\vskip 0cm\textcolor{color1}{--~\thepage / \pageref{LastPage}~--}}

\renewcommand{\headrule}{\hbox to\headwidth{
	\color{color2}\leaders\hrule height \headrulewidth\hfill}
}

% les notes de bas de page
\renewcommand\footnoterule{\kern-3pt \color{color2}\hrule width 2in \kern 2.6pt}
\renewcommand{\thefootnote}{\textcolor{color2}{\arabic{footnote}}}

% les figures
\addto\captionsfrench{\def\figurename{{Illustration}}} % à cause de babel... voir "https://www.developpez.net/forums/d903003/autres-langages/autres-langages/latex/tableaux-graphiques-images-flottants/changer-nom-figure-tableau-etc/" 
\def\fnum@figure{\textcolor{color2}{\textbf{\figurename~\thefigure}}}

% format des sections
\definecolor{lightgray}{gray}{0.9}
\setcounter{secnumdepth}{4}
\titleformat{\section}
	{\color{color2}\Large\sffamily\bfseries}
	{\colorbox{lightgray}{\parbox{\dimexpr\linewidth-2\fboxsep\relax}{\vskip 1mm\centering\arabic{section}. #1\vskip 1mm}}}
	{1em}
	{}
\titleformat{name=\section, numberless} % pour la commande section*{}
	{\color{color2}\Large\sffamily\bfseries}
	{\colorbox{lightgray}{\parbox{\dimexpr\linewidth-2\fboxsep\relax}{\vskip 1mm \centering #1\vskip 1mm}}}
	{1em}
	{}
\titleformat{\subsection}[hang]
	 {\normalfont\large\bfseries}
	 {\textcolor{color1}\thesubsection}
	 {1em}
	 {\textcolor{color1}{#1}}
\titleformat{\subsubsection}
	[hang]
	{\normalfont\normalsize\bfseries}
	{\color{color3}\thesubsubsection}
	{1em}
	{\textcolor{color3}{#1}}
 
% structure des sections
\renewcommand\thesection{\@arabic\c@section.}
\renewcommand\thesubsection{\thesection\@arabic\c@subsection.}
\renewcommand\thesubsubsection{\@alph\c@subsubsection)}
\renewcommand\theparagraph {}
\renewcommand\thefigure {\@arabic\c@figure}

\titlespacing*{\section}{0pc}{4ex \@plus4pt \@minus3pt}{5pt}
\titlespacing*{\subsection}{0pc}{2.5ex \@plus3pt \@minus2pt}{0pt}
\titlespacing*{\subsubsection}{0pc}{2ex \@plus2.5pt \@minus1.5pt}{0pt}
\titlespacing*{\paragraph}{0pc}{1.5ex \@plus2pt \@minus1pt}{10pt}

% page de garde
\renewcommand\maketitle{
	\noindent
	\begin{center}
		\vskip 0.5cm
			\begin{LARGE}
				\textcolor{color1}{\textsc{\textbf{Le Labs}}}\\
			\end{LARGE}
			\vskip 0.5cm
			\begin{Large}
				\textit{Document de conception logiciel}
			\end{Large}
			\vskip 0.5cm
	\vskip 0.5cm
	\noindent
	\small{\sffamily{\bfseries{\textsc{Auteur : El Moussaoui Bilal}}}}\footnote{\mail}\\
	\small{\sffamily{\bfseries{\textsc{Date : \today}}}}\\
	%\small{\sffamily{\bfseries{\textsc{Version : Utopia}}}}
	\end{center}
}