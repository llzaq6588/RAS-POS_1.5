
=======================   RAS-POS system 1.5ver  ===================================

	※ 본 웹 에플리케이션은 웹서버(Apache) 위에서 동작합니다.
	※ 본 웹 에플리케이션은 UTF-8 인코딩을 사용합니다.
	※ 본 웹 에플리케이션 내에 상품정보는 사용자가 '직접' 입력해야합니다.
		<상품정보가 없다고 문의하지 마시기 바랍니다.>
	※ 본 웹 에플리케이션은 MIT LICENSE를 적용합니다.


RAS-POS system 설치

1. OS상관없이 APM부터 우선적으로 설치되어야 합니다.
<APM : Apache, Php, Mysql 구성의 기본 웹서버입니다. 다른 것을 사용해도 무방합니다.>

2. Mysql에 계정과 테이블을 만들어줍니다. 계정은 다음과 같습니다.

	HOSTNAME : LOCALHOST
	ID :	   RASPOS
	PW :	   RASPOSPW
	TABLE :    RASPOS

3. 반드시 동봉된 raspos1.5ver.sql을 덮어씁니다.
<raspos1.5 test ver.sql은 sample용입니다.>

4. Raspberry PI 안에서 사용할 경우 인터넷 익스플로어는 '미도리'를 사용합니다.

5. 웹서버의 root directory에 RAS-POS의 코드를 입력합니다.

6. Raspberry PI 안이나 설치된 PC에 사용할 경우 인터넷 주소는 http://localhost/이고 외부에서 사용할 경우 http://ip주소/입니다.

7. 상품관리, 매상정보를 확인하려면 http://주소/admin으로 들어갑니다.
</admin/index.php는 IE기준 확대 100%에 맞추어져 있습니다. 메뉴 글자가 잘 안보이실 경우 CTRL + 0으로 사이트 크기를 맞추시기 바랍니다.>



RAS-POS system 1.0ver를 설치하신 분들은

RASPOS databases의 내용을 수정해주어야 합니다.

기존에 DB의 TABLE은 지워주시고,

만약 수정하실 수 있다면 TABLE을 다음과 같이 수정해 주시기 바랍니다.

---------------------------------------------------------------------------
TABLE price

#  이름        종류         데이터정렬방식
1  date        date                          <====== 추가
2  code        varchar(15)  utf8_general_ci
3  name        text         utf8_general_ci
4  price       int(11)
---------------------------------------------------------------------------
TABLE sold_book

#  이름        종류         데이터정렬방식
1  yearmonth   varchar(8)   utf8_general_ci <====== 추가, 변경
2  sellday     date                         <====== 추가, 변경
3  time        time
4  totalprice  int(10)



RAS-POS system 1.2ver를 설치하신 분들은

RASPOS databases의 내용을 수정해주어야 합니다.

기존에 DB의 TABLE은 지워주시고,

만약 수정하실 수 있다면 TABLE을 다음과 같이 수정해 주시기 바랍니다.

---------------------------------------------------------------------------
TABLE sold_book

#  이름        종류         데이터정렬방식
1  year        int                          <====== 추가, 변경
2  yearmonth   varchar(8)   utf8_general_ci
3  sellday     date                        
4  time        time
5  totalprice  int(10)

**************************      수정사항      *****************************


※ RAS-POS 메인화면(index.html, result_price.php, result_price_2.php)이 7인치용으로 변경이 되었습니다.

※ 추가금액징수 시스템이 추가되었습니다.
<바코드가 인쇄되지 않는 물건이라던가, 봉투값이나 추가 외상값등 추가 금액이 발생할 시에는 바로 금액만 입력하더라도 구입목록 안에 들어가도록 설계되었습니다. 범위는 200원 ~ 100만원 까지 입니다.>

※ 잔돈 계산 시스템이 추가되었습니다. 
<계산 후에 바로 enter로 들어가시면 시스템에 진입하실 수 있습니다. 자세한 내용은 result_price_2.php의 주석을 참조하시기 바랍니다.>

※ 상품관리 위치가 /insert.php에서 /admin으로 바뀌었습니다.

※ 가독성을 위해 /admin/index.html에 프래임셋이 적용되었습니다. 한 웹페이지에 insert와 delete를 동시에 처리할 수 있습니다.

※ 상품을 제거할 경우 1.2ver과 달리 상품code 대신 이름을 입력해서 상품을 검색하여 제거할 수 있습니다.

※ 월별 매출정보를 보여주는 yearchart.php가 추가되었습니다. 차트는 Highcharts-3.0.7을 사용하였습니다.

※ Highcharts-3.0.7은 Highsoft에서 만들었으며 Creative Commons Attribution-NonCommercial 3.0 License를 적용함으로 yearchart.php에 대한 영리적 목적의 사용을 금합니다.

※ yearchart.php에 대한 다른 차트의 적용을 원하신다면 개인적으로 연락하여 주시기 바랍니다.

※ raspos DB 'raspos1.5ver.sql'은 아무 데이터가 없은 형식만 저장이 되어 있습니다. RAS-POS SAMPLE을 경험해보고 싶으시다면 'raspos1.5 test ver.sql'를 DB에 적용해주시기 바랍니다.



			builded Web-Application by KAERIUS
======================================================================================