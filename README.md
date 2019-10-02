# PhpTpFinal
Trabajo Práctico Programación Web 2
<br>
Enunciado<br>
Descripción general del sistema<br>
La empresa “GauchoRocket S.A.” está incursionando en el mundo del turismo espacial. Dado que la misma no posee un departamento de desarrollo de siste-mas, va a contratarnos para desarrollar la plataforma que les permita gestionar re-servas, viajes y facturación poseyendo un buen control y generación de reportes y estadísticas, facilitando el análisis del producto en tiempo real.<br>
4
Como detalles técnicos extras, el cliente desea que trabajemos sobre servidores Linux con lenguaje de programación PHP por parte del servidor y bases de datos MySql para almacenar los datos (De más está decir que las claves de los usuarios deben ser almacenadas como mínimo en MD5), ya que confía en estas tecnolo-gías y su departamento de arquitectura posee experiencia en las mismas (Además de evitar tener que pagar licencias y mantener su filosofía de difusión libre de la in-formación, por lo que apoya los proyectos OpenSource). Respecto al código, como el mismo, por contrato, le pertenece, desea que el desarrollo del mismo se realice sobre un sistema de versionado GIT, donde pueda ver el avance del mismo, y participar en él con el equipo de programadores que vayan agregando, en caso de que creen su departamento de desarrollo, para lo mismo solicita que el código sea almacenado en la plataforma GitLab o GitHub.
El gerente de GauchoRocket nos comenta que su intención es que en la primera versión del sistema puedan contar con al menos tres tipos diferentes de usuarios:<br>
 Interesados: Los cuales podrán buscar a lo largo de sus servicios, tanto de viaje como de alojamiento la mejor opción para su interés, capacidad eco-nómica y posibilidades físicas. Por lo tanto y ante todo el sistema debe per-mitir la búsqueda libre sobre todos los servicios ofertados en las combina-ciones que puedan surgir.
 Cliente: Usuarios que han decidido contratar los servicios de GauchoRo-cket, para lo cual, y ante todo se le solicitara un registro con confirmación vía mail para luego proceder a permitirle adquirir los servicios, gestionar sus reservas, realizar el pago y emitir toda la información en formato escrito que el cliente requiera.
 Administrador y generador de reportes (Inicialmente agrupará estos tipos de usuario para simplificar el desarrollo): El cual deberá poder realizar la admi-nistración del sitio, generará la facturación mensual y tendrá a su disposi-ción los reportes de gestión que más adelante se detallan.<br>
Detalle de funcionalidades<br>
Nuestro encargado de ventas y un analista en sistemas del sector de ventas (el cual es principiante), fueron a visitar al cliente para cerrar el contrato, por lo cual poseemos un análisis inicial de las funcionalidades, y deberemos profundizar en las mismas en las próximas visitas con el cliente, las cuales se acordaron los lunes y martes de 19 a 23. La buena noticia es que fuimos contratados para llevar a cabo el desarrollo del producto. A continuación, detallaremos la información que pudo absorber nuestro analista:<br>
Características de Negocios<br>
5
El negocio de GuachoRocket consta de dos partes principales, por un lado, comer-cializa viajes espaciales a través de sus distintos vectores, de los cuales se nos fa-cilita una lista con sus características. Estos viajes pueden ser: suborbitales, orbi-tales, o entre destinos. En todos los casos existe un calendario de vuelos, con el equipo ya definido, por lo cual la capacidad de reserva para un tipo y fecha de viaje determinado ya son conocidas en función de la calendarización y de las ca-racterísticas del equipo.<br>
A todo cliente, una vez registrado, se le pide que realice un chequeo médico de ru-tina en alguno de los tres centros médicos disponibles, el de Buenos Aires (300 turnos diarios), el de Shanghái (210 turnos diarios) y el de Ankara (200 turnos dia-rios). Este chequeo le devuelve al cliente un código de viajero que tiene asignado un nivel de vuelo. Este nivel de vuelo (1,2 o 3) es el que limita el tipo de equipo al que el cliente se puede subir. El sistema debe gestionar los turnos de los tres cen-tros médicos.<br>
Los equipos son de tres tipos principalmente, Orbitales, de baja aceleración y de alta aceleración, los clientes tipo 1 y 2 pueden reservar solo en los dos primeros y los clientes tipo 3 en cualquiera de ellos.<br>
Los equipos de tipo suborbital solo realizan vuelos suborbitales, los de baja y alta aceleración realizan los otros tipos de viajes.
Los viajes suborbitales y los orbitales tienen fecha de partida y duración. Sobre la tarifa del pasaje, a los clientes se les cobra una tarifa de hotelería sobre la canti-dad de días que permanecen en el espacio.<br>
GauchoRocket ofrece vuelos a siguientes destinos, Estación Espacial Internacio-nal, OrbiterHotel, Luna, Marte, Ganimedes, Europa, Io, Encedalo y Titán desde dos locaciones en la tierra, Buenos Aires y Ankara. Por otra parte, ofrece un tour completo con 2 equipos en especial que recorre todos los destinos, continúa hasta Neptuno y regresa, todo el tour toma alrededor de 21 días. Los vuelos entre desti-nos, puede recalar en destinos previos, por ejemplo, el vuelo a Marte, hace escala en Luna, por lo tanto, se pueden reservar pasajes entre Marte y Luna con las debi-das disponibilidades chequeadas. Los recorridos completos se entregan en docu-mento aparte.
Cada vuelo tiene una duración determinada y se pueden reservar tres tipos de ca-binas, general, familiar y suite, al momento de realizar el check-in el usuario debe poder seleccionar entre las cabinas que le corresponden la ubicación dentro del equipo y en el caso de la general la litera donde dormirá.<br>
Las reservas para el vuelo elegido se gestionan a través del sistema y el cliente puede elegir vuelo, cabina y tipo de servicio de a bordo (standard, gourmet, spa). Se pueden reservar y pagar más de un pasaje cada vez.<br>
Las reservas para un vuelo determinado se toman hasta 24 hs de dicho vuelo, a partir de ese momento se ingresa en una lista de espera que se activa a las 2 hs de partida para reemplazar por orden de llegada a aquellos que no hayan hecho el Check-in a través del sistema entre las 48 hs anteriores a la salida y las 2 horas de la salida. Al realizar el Check-in, el cliente confirma su reserva, se le emite un pase de abordaje con un Codigo QR (Impreso y por email) y un código alfanumérico identificatorio que se utiliza para la autorización del abordaje. El sistema debe rea-lizar ambos procesos.<br>
El pago de los servicios se realiza por adelantado mediante tarjeta de crédito, no pudiéndose realizar el Check-in sin el pago.<br>
El administrador debe poder realizar el mantenimiento del sitio y especialmente los reportes de funcionamiento de la empresa, por ejemplo<br>
 Tasa de ocupación por viaje y equipo<br>
 Facturación Mensual<br>
 Cabina más vendida<br>
 Facturación por Cliente<br>
Todos los reportes se requieren nominales y en forma gráfica, exportables a pdf.<br>
Entrega 1<br>
En función de lo leído en el enunciado plantee en la forma Sujeto-Acción-Objeto las funcionalidades
granulares del sistema que puede discernir, por ejemplo: “El usuario se registra en el sistema”.
A partir de estas oraciones identifique enumerándolos los que para Usted son los objetos significativos
del sistema.
Por otra parte, realice un borrador del diagrama de Entidad-Relación donde se vean plasmados la
estructura de datos que identifica necesarios para el sistema.<br>
Entrega 2<br>
En función de lo leído en el enunciado plantee el proceso de Login y el registro de clientes.
El planteamiento se entregará codificado en HTML/PHP/CSS y deberá verificar la validez de las
credenciales pasadas por el Usuario contra la base de datos del sistema.
Tenga en cuenta que existen al menos 2 (DOS) tipos de usuarios, el usuario común y el administrador.
Para esta etapa cree solamente las tablas estrictamente necesarias para realizar el Login y el registro.
