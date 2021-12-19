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
            <h3><b>Весь путь сначала...</b><br><br></h3>
        </div>
        
        <div class="text">
            <h3>Добавление нужных библиотек<br></h3>
        </div>

        <div class="code">
            <cmds>import</cmds> pandas <cmds>as</cmds> pd <com>#Библиотека для обработки и анализа данных</com><br>
            <cmds>import</cmds> numpy <cmds>as</cmds> np <com>#Библиотека для работы с массивами</com><br>
            <cmds>import</cmds> matplotlib.pyplot <cmds>as</cmds> plt <com>#Библиотека для построения графиков</com><br>
            <cmds>import</cmds> seaborn <cmds>as</cmds> sns <com>#Библиотека для построения графиков</com><br>
        </div>
        <br>
        <!-- -------------- -->

        <div class="text">
            <h3>Открытие Dataframe из разных файлов</h3>
        </div>

        <div class="code">
            df = pd.read_csv(<str>'F:/путь/файл.csv'</str>, index_col=0)<br>
        </div>
        <div class="text">
            Или<br>
        </div>
        <div class="code">
            df = pd.read_excel(<str>'F:/путь/файл.xmls'</str>, index_col=0)<br>
        </div><br>
        <!-- -------------- -->

        <div class="text">
            <h3>Общая информация о DataFrame:</h3>
        </div>

        <div class="code">
            df[:<cmds>5</cmds>] <com>#вывести первые пять строчек DataFrame</com><br>
            <br>
            df.head(<cmds>5</cmds>) <com>#тоже вывести первые пять строчек DataFrame</com><br>
            rating.tail(<cmds>5</cmds>) <com>#вывести последние пять строчек DataFrame</com><br>
        </div>

        <div class="code">
            <cmds>len</cmds>(df) <com>#кол-во строчек DataFrame</com><br>
        </div>

        <div class="code">
            df[<str>"Столбец"</str>].value_counts() <com>#количество значений в конкретном столбце</com><br>
        </div>

        <div class="code">
            df.info() <com>#вывести информацию о столбцах (кол-во значений, пустой, тип)</com><br>
        </div>

        <div class="code">
            df.describe() <com>#вывод статистических сведений о датафрейме</com><br>
        </div>

        <div class="code">
            df.columns[df.isna().any()].tolist() <com>#просмотр столбцов имеющие NaN</com><br>
        </div>
        
        <div class="code">
            df.columns[df.isin([<str>'TEXT1'</str>]).any()].tolist() <com>#просмотр столбцов имеющие TEXT1</com><br>
        </div>
        
        <div class="code">
            df.sort_values(<str>'Столбец'</str>, ascending=False) <com>#сортировка по столбцу</com><br>
        </div>

        <div class="code">
            df.groupby(<str>'Столбец'</str>).count() <com>#сколько те или иные значения встречаются в столбце раз</com><br>
        </div>
        <br>
        <!-- -------------- -->

        <div class="text">
            <h3>Действия со значениями:</h3>
        </div>

        <div class="text">
            Если нужно получить небольшой случайный набор строк из большого датафрейма. Если используется параметр frac=1, то функция позволяет получить аналог исходного датафрейма, строки которого будут перемешаны.<br>
        </div>

        <div class="code">
            df.sample(frac=<cmds>0.25</cmds>)<br>
        </div>

        <div class="code">
            <com>Заполнить пустые значения " " на конкретные значения</com><br>
            df[<str>'Столбец'</str>]=[<cmds>1 if len</cmds>(item) == <cmds>0 else</cmds> item <cmds>for</cmds> item <cmds>in</cmds> df[<str>'Столбец'</str>]]
        </div>

        <div class="code">
            <com>#Замена NaN на моду категориальных значений</com><br>
            mo = str(df[<str>'Столбец'</str>].mode()[<cmds>0</cmds>])<br>
            df[<str>'Столбец'</str>] = df[<str>'Столбец'</str>].fillna(mo)<br>
        </div>

        <div class="code">
            <com>#Замена NaN на медиану числовых значений</com><br>
            me = df[<str>'Столбец'</str>].median()<br>
            df[<str>'Столбец'</str>] = df[<str>'Столбец'</str>].fillna(me)<br>
        </div>

        <div class="code">
            <com>#Замена уникальных значений на нумерованные типы</com><br>
            bs = df[<str>'Столбец'</str>].unique().tolist()<br>
            adict = dict(enumerate(bs))<br>
            keys = {x:y for y, x in adict.items()}<br>
            df[<str>'Столбец'</str>] = df[<str>'Столбец'</str>].map(keys)<br>
        </div>

        <div class="code">
            <com>#Замена значений</com><br>
            df[<str>'Столбец'</str>] = df[<str>'Столбец'</str>].replace(<str>'Знач1'</str>, <str>'Знач2'</str>)<br>
        </div>

        <div class="code">
            <com>#Изменение типа значений в столбце</com><br>
            df[<str>'Столбец'</str>] = df[<str>'Столбец'</str>].astype(<cmd>int</cmd>)<br>
        </div>

        <div class="code">
            <com>#Удаление выбросов</com><br>
            q1 = df[<str>'Столбец'</str>].describe()[<cmds>4</cmds>]<br>
            q2 = df[<str>'Столбец'</str>].describe()[<cmds>6</cmds>]<br>
            <br>
            x1 = q1 - <cmds>1.5</cmds> * (q2 - q1)<br>
            x2 = q2 + <cmds>1.5</cmds> * (q2 - q1)<br>
            df = df.drop(df[df[<str>'Столбец'</str>] > x2].index)<br>
            df = df.drop(df[df[<str>'Столбец'</str>] < x1].index)<br>
        </div><br>
        <!-- -------------- -->

        <div class="code">
            df.corr() <com>#просмотр корреляционной таблицы</com><br>
        </div><br>
   
         <!-- -------------- -->
        <div class="text">
            <h3>Действия со столбцами:</h3>
        </div>

        <div class="code">
            <cmds>del</cmds> df[<str>'Столбец'</str>] <com>#удаление столбца из DataFrame</com><br>
        </div>

        <div class="code">
            <com>#удаление нескольких столбцов разом из DataFrame</com><br>
            df.drop([<str>'Столбец1'</str>, <str>'Столбец2'</str>, <str>'Столбец3'</str>], axis=<cmds>1</cmds>).head()<br>
        </div>
        
        <div class="code">
            <com>#создание нового столбца с именем 'Столбец' и заполнен значениями True</com><br>
            df[<str>'Столбец'</str>] = <cmds>True</cmds><br>
        </div>

        <div class="code">
            <com>#разделение Столбец на НСтолбец1 и НСтолбец2 по знаку + Например: 1+2 разделятся по разным столбцам на  НСтолбец1: 1 и  НСтолбец2: 2</com><br>
            df[[<str>'НСтолбец1'</str>, <str>'НСтолбец2'</str>]] = df[<str>'Столбец'</str>].str.split(<str>'+'</str>, <cmds>1</cmds>, expand=True)<br>
            <cmds>del</cmds> df[<str>'Столбец'</str>] <com>#удаление старого столбца</com><br>
        </div>

        <div class="code">
            <com>#разделение Столбец на НСтолбец1 и НСтолбец2 и НСтолбец3 по знаку +</com><br>
            df[[<str>'НСтолбец1'</str>, <str>'НСтолбец2'</str>, <str>'НСтолбец3'</str>]] = df[<str>'Столбец'</str>].str.split(<str>'+'</str>, <cmds>2</cmds>, expand=True) <br>
            <cmds>del</cmds> df[<str>'Столбец'</str>] <com>#удаление старого столбца</com><br>
        </div><br>
        <!-- -------------- -->

        <div class="text">
            <h3>Машинное обучение:</h3>
        </div>

        <div class="code">
            <com>#Разбиение на тестовую и треноровочную выборки</com><br>
            <cmds>from</cmds> sklearn.model_selection <cmds>import</cmds> train_test_split <com># d</com><br> 
            df[<str>"Столбец"</str>] = df[<str>"Столбец"</str>].astype(<cmds>float</cmds>)<br>
            y = df[<str>"Столбец"</str>].values <com>#запись того что надо предсказать</com><br>
            <br>
            del df[<str>"Столбец"</str>] <com>#удалить ту что нужно предсказать</com><br>
            x = df<br>
            <br>
            x_train, x_test, y_train, y_test = train_test_split(x, y, test_size=<cmds>0.3</cmds>)<br>
        </div>

        <div class="code">
            <cmds>from</cmds> sklearn.ensemble <cmds>import</cmds> RandomForestClassifier<br>
            <cmds>from</cmds> sklearn.neighbors <cmds>import</cmds> KNeighborsClassifier<br>
            <cmds>from</cmds> sklearn.svm <cmds>import</cmds> SVC<br>
            <cmds>from</cmds> sklearn.linear_model <cmds>import</cmds> LinearRegression<br>
            <cmds>from</cmds> sklearn.linear_model <cmds>import</cmds> LogisticRegression<br>
            <br>
            model = RandomForestClassifier().fit(x_train, y_train)<br>
            model1 = KNeighborsClassifier().fit(x_train,y_train)<br>
            model2 = SVC().fit(x_train, y_train)<br>
            model3 = LinearRegression().fit(x_train, y_train)<br>
            model4 = LogisticRegression().fit(x_train, y_train)<br>
        </div>

        <div class="code">
            <cmds>print</cmds>(<str>f'Случайный лес: {model.score(x_test, y_test)}\nК ближ соседей: {model1.score(x_test, y_test)}\nЛиней опорных векторов: {model2.score(x_test, y_test)}'</str>)<br>
        </div>

        <div class="code">
            <cmds>print</cmds>(<str>f'Случ лес\n{model.predict(x_test)}\n\nК ближ соседей\n{model1.predict(x_test)}\n\nЛиней опорных векторов\n{model2.predict(x_test)}'</str>)<br>
        </div>

        <div class="code">
            <com>#Создание датафрейма из данных, введённых вручную</com>
            data_test = {<str>"Столбец1"</str>:  <cmds>3</cmds>, <str>"Столбец2"</str>: <cmds>27</cmds>, <str>"Столбец3"</str>: <cmds>0.70</cmds>}<br>
            data_test = pd.DataFrame(data=[data_test])<br>
            data_test<br>
        </div>

        <div class="code">
            <cmds>print</cmds>(<str>f'Прогнозы на:\n{data_test}\nСлучайный лес: {model.predict(data_test)}\nК ближ соседей: {model1.predict(data_test)}\nЛиней опорных векторов: {model2.predict(data_test)}\nЛиней регрессия: {model3.predict(data_test)}\nЛогистическая регрессия: {model4.predict(data_test)}'</str>)<br>
        </div><br><br>

        

        <div class="code">
            
        </div>

        <div class="code">
            
        </div>

        <div class="code">
            
        </div>
    </body>
</html>