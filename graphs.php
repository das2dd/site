<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css"></link>
	    <title>Коко-джамбо</title>
    </head>
    <body>
        <nav class="four">
            <ul class="topmenu">
                <li>
                    <a href="index.php">Главная</a>
                    <ul class="submenu">
                        <li><a href="" target="_blank">Прим. 1</a></li>
                        <li><a href="" target="_blank">Прим. 2</a></li>
                    </ul>
                </li>
                <li><a href="graphs.php">Графики</a>
                <li>
                    <a href="links.php">Ссылки</a>
                    <ul class="submenu">
                        <li><a href="https://scikit-learn.org/stable/index.html" target="_blank">Scikit</a></li>
                        <li><a href="https://pandas.pydata.org/" target="_blank">Pandas</a></li>
                        <li><a href="https://numpy.org/" target="_blank">NumPy</a></li>
                        <li><a href="https://seaborn.pydata.org/" target="_blank">SeaBorn</a></li>
                        <li><a href="https://matplotlib.org/" target="_blank">MatPlot Lib</a></li>
                        <li><a href="https://habr.com/ru/company/ruvds/blog/494720/" target="_blank">Шпар с Habr</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="text">
            <h3><b>Графики...</b><br><br></h3>
        </div>
        
        <div class="code">
            plt.rcParams[<str>"figure.figsize"</str>] = (<cmds>10</cmds>,<cmds>5</cmds>)<br>

            <com>#Распределение</com><br>
            ax = sns.countplot(y = <str>'building_age'</str>, palette = <str>'Set1'</str>, data = df)<br>
            ax.set(title = <str>'Распределение building_age по количеству'</str>,<br>
            xlabel = <str>'Количество'</str>, ylabel = <str>'Возраст'</str>)<br>
            plt.show()<br>
        </div>

        <div class="pic">
            <img src="Pics/site1.png"/>.
        </div><br>

        <div class="code">
            <com>#Посмотрим зависимости building_age от числовых признаков</com><br>
            plt.rcParams[<str>"figure.figsize"</str>] = (<cmds>10</cmds>,<cmds>5</cmds>)<br>
            sns.heatmap(df.corr(), annot = <cmds>True</cmds>, fmt = <str>".01f"</str>)<br>

            <com>#По факту что и df.corr(), но в графическом виде</com><br>
        </div>

        <div class="pic">
            <img src="Pics/site2.png"/>.
        </div><br>

        <div class="code">
            sns.boxplot(data = df[df[<str>"price"</str>] < <cmds>1000000</cmds>], x = <str>"price"</str>, y = <str>"sub_type"</str>)<br>
        </div>

        <div class="pic">
            <img src="Pics/site3.png"/>.
        </div><br>

        <div class="code">
            <com>#Гистограмма Energy Star Score</com><br>
            plt.style.use(<str>'fivethirtyeight'</str>)<br>
            plt.hist(df[df[<str>'price'</str>] < <cmds>20000</cmds>][<str>'price'</str>].dropna(), bins = <cmds>100</cmds>, edgecolor = <str>'k'</str>);<br>
            plt.xlabel(<str>'цена'</str>); plt.ylabel(<str>'Кол-во построек'</str>);<br>
            plt.title(<str>'Распределение формирования цен'</str>);<br>
        </div>

        <div class="pic">
            <img src="Pics/site4.png"/>
        </div><br>

        <div class="code">
            
        </div>
    </body>
</html>