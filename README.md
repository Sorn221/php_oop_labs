# php_oop_labs
Лабораторные работы по объектно ориентированному программированию на языке php

Задание №1
        
            Реализуйте функцию calculateDistance(), которая находит расстояние между двумя точками на плоскости.
            
            Точки задаются в виде массива из двух элементов. Первый элемент - координата х, второй - координата y.
            
            Пример использования
            
            
            $point1 = [0, 0];
            $point2 = [3, 4];
            calculateDistance($point1, $point2); // 5
            
            Для проверки  работы функции добавьте следующий код
            
            
            $point1 = [0, 0];
            $point2 = [3, 4];
            print calculateDistance($point1, $point2);
            print "<br>";
            
            $point3 = [-1, -4];
            $point4 = [-1, -10];
            print calculateDistance($point3, $point4);
            print "<br>";
            
            $point3 = [1, 10];
            $point4 = [1, 3];
            print calculateDistance($point3, $point4);




Задание №2
            Реализуйте функцию getMidpoint(), которая находит точку посередине между двумя указанными точками
            
            Пример использования
            
            $point1 = ['x' => 0, 'y' => 0];
            $point2 = ['x' => 4, 'y' => 4];
            $point3 = getMidpoint($point1, $point2);
            print_r($point3); // => [ 'x' => 2, 'y' => 2 ]
            
            Для проверки  работы функции добавьте следующий код
            
            
            $point1 = ['x' => 0, 'y' => 0];
            $point2 = ['x' => 4, 'y' => 4];
            $point3 = getMidpoint($point1, $point2);
            print_r(point3);
            print "<br>";
            $point1 = ['x' => -1, 'y' => 10];
            $point2 = ['x' => 0, 'y' => -3];
            $point3 = getMidpoint($point1, $point2);
            print_r($point3);




Задание №3
            Отрезок - еще один графический примитив. В коде описывается парой точек, одна из которых - начало отрезка, другая - конец. Обычный отрезок не имеет направления, поэтому вы сами вольны выбирать то, какую точку считать началом, а какую концом.
            
            В этом задании подразумевается, что вы уже понимаете принцип построения абстракции и способны самостоятельно принять решение о том, как она будет реализована. 
            Реализуйте указанные ниже функции:
            
                makeSegment(). Принимает на вход две точки и возвращает отрезок.
                getMidpointOfSegment(). Принимает на вход отрезок и возвращает точку находящуюся на середине отрезка.
                getBeginPoint(). Принимает на вход отрезок и возвращает точку начала отрезка.
                getEndPoint(). Принимает на вход отрезок и возвращает точку конца отрезка.
            
            Пример использования
            
            $segment = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(0, 0));
             
            getMidpointOfSegment($segment); // (1.5, 1)
            getBeginPoint($segment); // (3, 2)
            getEndPoint($segment); // (0, 0)
            
            Для точки используйте функции
            
            
            function makeDecartPoint($x, $y)
            {
                return [
                    'x' => $x,
                    'y' => $y
                ];
            }
            
            function getX($point)
            {
                return $point['x'];
            }
            
            function getY($point)
            {
                return $point['y'];
            }
            
            Для проверки  работы функции добавьте следующий код
            
            
            $beginPoint = makeDecartPoint(3, 2);
            $endPoint = makeDecartPoint(0, 0);
            $segment = makeSegment($beginPoint, $endPoint);
            print_r(getBeginPoint($segment));
            print "<br>";
            
            print_r(getEndPoint($segment));
            print "<br>";
            
            $segment = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(0, 0));
            print_r(getMidpointOfSegment($segment));
            print "<br>";
            
            $segment2 = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(2, 3));
            print_r(getMidpointOfSegment($segment2));



Задание 4
            Ваша задача, реализовать интерфейсные функции для работы с точками. Внутреннее представление точек должно быть основано на полярной системе координат, a интерфейс предполагает работу с декартовой системой.
            
            Реализуйте интерфейсные функции точек:
            
                makePoint(). Принимает на вход координаты и возвращает точку.
                getX()
                getY()
            
            Пример использования
            
            
            $x = 4;
            $y = 8;
             
            // $point хранит в себе данные в полярной системе координат
            $point = makePoint($x, $y);
             
            // Здесь происходит преобразование из полярной в декартову
            getX($point); // 4
            getY($point); // 8
            
            Для проверки будут использоваться отрезки, которые в свою очередь используют точки. Поэтому добавьте функции для работы с отрезками:
            
            
            function makeSegment($point1, $point2)
            {
                return ['beginPoint' => $point1, 'endPoint' => $point2];
            }
            
            function getBeginPoint($segment)
            {
                return $segment['beginPoint'];
            }
            
            function getEndPoint($segment)
            {
                return $segment['endPoint'];
            }
            
            function isParallelWithX($segment)
            {
                $beginPoint = getBeginPoint($segment);
                $endPoint = getEndPoint($segment);
            
                return getY($beginPoint) === getY($endPoint);
            }
            
            function isParallelWithY($segment)
            {
                $beginPoint = getBeginPoint($segment);
                $endPoint = getEndPoint($segment);
            
                return getX($beginPoint) === getX($endPoint);
            }
            
            Добавьте код для проверки результата
            
            
            $point1 = makePoint(3, 2);
            $point2 = makePoint(0, 0);
            $point3 = makePoint(3, -5);
            $point4 = makePoint(0, -5);
            print(isParallelWithY(makeSegment($point1, $point2))?"true":"false");
            print "<br>";
            print(isParallelWithY(makeSegment($point1, $point3))?"true":"false");
            print "<br>";
            print(isParallelWithX(makeSegment($point2, $point3))?"true":"false");
            print "<br>";
            print(isParallelWithX(makeSegment($point3, $point4))?"true":"false");



Задание 5
            Реализуйте абстракцию (набор функций) для работы с прямоугольниками, стороны которого всегда параллельны осям. Прямоугольник может располагаться в любом месте координатной плоскости.
            
            При такой постановке, достаточно знать только три параметра для однозначного задания прямоугольника на плоскости: координаты левой-верхней точки, ширину и высоту. Зная их, мы всегда можем построить прямоугольник одним единственным способом.
            
            
            Основной интерфейс:
            
                makeRectangle() (конструктор) – создает прямоугольник. Принимает параметры: левую-верхнюю точку, ширину и высоту. Ширина и высота – положительные числа.
            
                Селекторы getStartPoint(), getWidth() и getHeight()
            
                containsOrigin() – проверяет, принадлежит ли центр координат прямоугольнику (не лежит на границе прямоугольника, а находится внутри). Чтобы в этом убедиться, достаточно проверить, что все вершины прямоугольника лежат в разных квадрантах (их можно высчитать в момент проверки).
            
            Пример использования
            
            
            // Создание прямоугольника:
            // p - левая верхняя точка
            // 4 - ширина
            // 5 - высота
            //
            // p    4
            // -----------
            // |         |
            // |         | 5
            // |         |
            // -----------
             
            $p = makeDecartPoint(0, 1);
            $rectangle = makeRectangle($p, 4, 5);
             
            containsOrigin($rectangle); // false
             
            $rectangle2 = makeRectangle(makeDecartPoint(-4, 3), 5, 4);
            containsOrigin($rectangle2); // true
            
            Для точки определите следующие функции
            
            
            function makeDecartPoint($x, $y)
            {
                return [
                    'x' => $x,
                    'y' => $y
                ];
            }
            
            function getX($point)
            {
                return $point['x'];
            }
            
            function getY($point)
            {
                return $point['y'];
            }
            
            function getQuadrant($point)
            {
                $x = getX($point);
                $y = getY($point);
            
                if ($x > 0 && $y > 0) {
                    return 1;
                } elseif ($x < 0 && $y > 0) {
                    return 2;
                } elseif ($x < 0 && $y < 0) {
                    return 3;
                } elseif ($x > 0 && $y < 0) {
                    return 4;
                }
            
                return null;
            }
            
            Добавьте код для тестирования результата
            
            
            $p = makeDecartPoint(0, 1);
            $rectangle = makeRectangle($p, 4, 5);
            print_r(getStartPoint($rectangle));
            print "<br>";
            print getWidth($rectangle);
            print "<br>";
            print getHeight($rectangle);
            print "<br>";
            
            $p2 = makeDecartPoint(-4, 3);
            $rectangle2 = makeRectangle($p2, 5, 4);
            print_r(getStartPoint($rectangle2));
            print "<br>";
            print getWidth($rectangle2);
            print "<br>";
            print getHeight($rectangle2);
            print "<br>";
            
            $p = makeDecartPoint(0, 1);
            $rectangle = makeRectangle($p, 4, 5);
            print(containsOrigin($rectangle)?"true":"false");
            print "<br>";
            
            $p2 = makeDecartPoint(-4, 3);
            $rectangle2 = makeRectangle($p2, 5, 4);
            print(containsOrigin($rectangle2)?"true":"false");
            print "<br>";
            
            $rectangle3 = makeRectangle($p2, 2, 2);
            print(containsOrigin($rectangle3)?"true":"false");
            print "<br>";
            
            $rectangle4 = makeRectangle($p2, 5, 2);
            print(containsOrigin($rectangle4)?"true":"false");
            print "<br>";
            
            $rectangle5 = makeRectangle($p2, 2, 4);
            print(containsOrigin($rectangle5)?"true":"false");
            print "<br>";
            
            $rectangle6 = makeRectangle($p2, 4, 3);
            print(containsOrigin($rectangle6)?"true":"false");



Задание 6
            Реализуйте абстракцию для работы с рациональными числами включающую в себя следующие функции:
            
                Конструктор makeRational - принимает на вход числитель и знаменатель, возвращает дробь.
                Селектор getNumer - возвращает числитель
                Селектор getDenom - возвращает знаменатель
                Сложение add - складывает две переданные дроби
                Вычитание sub - находит разность между двумя дробями
            
            Не забудьте реализовать нормализацию дробей удобным для вас способом
            
            Пример использования
            
            
            $rat1 = makeRational(3, 9);
            getNumer($rat1); // 1
            getDenom($rat1); // 3
             
            $rat2 = makeRational(10, 3);
             
            $rat3 = add($rat1, $rat2);
            ratToString($rat3); // 11/3
             
            $rat4 = sub($rat1, $rat2);
            ratToString($rat4); // -3/1
            
            Вы можете использовать функции
            
            
            /* Функция gcd находит наибольший общий делитель двух чисел
            */
            function gcd($a, $b)
            {
                return ($a % $b) ? gcd($b, $a % $b) : abs($b);
            }
            /* Функция RatToString возвращает строковое представление числа
              (используется для отладки)
            */
            function ratToString($rat)
            {
                return getNumer($rat) . '/' . getDenom($rat);
            }
            
            Тестирование кода
            
            
            $rat1 = makeRational(3, 9);
            print ratToString($rat1)."<br>";
            $rat2 = makeRational(10, 3);
            print ratToString(add($rat1, $rat2))."<br>";
            print ratToString(sub($rat1, $rat2))."<br>";
            $rat3 = makeRational(-4, 16);
            print ratToString($rat3)."<br>";
            $rat4 = makeRational(12, 5);
            print ratToString(add($rat3, $rat4))."<br>";
            print ratToString(sub($rat3, $rat4))."<br>";
            $rat5 = makeRational(3, -9);
            print ratToString($rat5)."<br>";



Задание 7
            Реализуйте абстракцию для работы с url. Она должна извлекать и менять части адреса. Интерфейс:
            
                make($url) - Конструктор. Создает url.
                setScheme($data, $scheme) - Сеттер. Меняет схему.
                getScheme($data) - Селектор (геттер). Извлекает схему.
                setHost($data, $host) - Сеттер. Меняет хост.
                getHost($data) - Геттер. Извлекает хост.
                setPath($data, $path) - Сеттер. Меняет строку запроса.
                getPath($data) - Геттер. Извлекает строку запроса.
                setQueryParam($data, $key, $value) - Сеттер. Устанавливает значение для параметра запроса.
                getQueryParam($data, $paramName, $default = null) - Геттер. Извлекает значение для параметра запроса. Третьим параметром функция принимает значение по умолчанию, которое возвращается тогда, когда в запросе не было такого параметра
                toString($data) - Геттер. Преобразует url в строковой вид.
            
            Пример использования
            
            
            $url = make('https://ht.io/community?q=low');
             
            setScheme($url, 'http');
            toString($url); // 'http://ht.io/community?q=low'
             
            setPath($url, '/404');
            toString($url); // 'http://ht.io/404?q=low'
             
            setQueryParam($url, 'page', 5);
            toString($url); // 'http://ht.io/404?q=low&page=5'
             
            setQueryParam($url, 'q', 'high');
            toString($url); // 'http://ht.io/404?q=high&page=5'
             
            setQueryParam($url, 'q', null);
            toString($url); // 'http://ht.io/404?page=5'
            
            Подсказки
            
                Парсинг урла - parse_url
                Парсинг параметров запроса - parse_str
                Формирование строки запроса - http_build_query
                Собирать данные в url придется самостоятельно
            
            Тестирование кода
            
            
            $url = make('https://ht.io/community?q=low');
            print ('https://ht.io/community?q=low' === toString($url)) ? "true" : "false";
            print "<br>";
            print ('https' === getScheme($url)) ? "true" : "false";
            print "<br>";
            print ('ht.io' === getHost($url)) ? "true" : "false";
            print "<br>";
            print ('/community' === getPath($url)) ? "true" : "false";
            print "<br>";
            
            setScheme($url, 'http');
            print ('http://ht.io/community?q=low' === toString($url)) ? "true" : "false";
            print "<br>";
            
            setHost($url, 'code-basics.com');
            print ('http://code-basics.com/community?q=low' === toString($url)) ? "true" : "false";
            print "<br>";
            
            setScheme($url, 'https');
            setHost($url, 'ht.io');
            setPath($url, '/404');
            print ('https://ht.io/404?q=low' === toString($url)) ? "true" : "false";
            print "<br>";
            
            setQueryParam($url, 'page', 5);
            print ('https://ht.io/404?q=low&page=5' === toString($url)) ? "true" : "false";
            print "<br>";
            
            setQueryParam($url, 'q', 'high');
            print ('https://ht.io/404?q=high&page=5' === toString($url)) ? "true" : "false";
            print "<br>";
            print ('high' === getQueryParam($url, 'q')) ? "true" : "false";
            print "<br>";
            print ('guest' === getQueryParam($url, 'user', 'guest')) ? "true" : "false";
            print "<br>";
            print is_null(getQueryParam($url, 'b')) ? "true" : "false";
            print "<br>";
            
            setQueryParam($url, 'q', null);
            print ('https://ht.io/404?page=5' === toString($url)) ? "true" : "false";
            print "<br>";
            
            setQueryParam($url, 'q', null);
            print ('https://ht.io/404?page=5' === toString($url)) ? "true" : "false";
            print "<br>";
            
            $url = make('https://ht.io/community');
            print ('https://ht.io/community' === toString($url)) ? "true" : "false";
            print "<br>";
            
            $url = make('https://ht.io/?q=high&page=5');
            print ('https://ht.io/?q=high&page=5' === toString($url)) ? "true" : "false";
            print "<br>";
