# school_food_parse
주간 학교급식 파싱해주는 소스입니다.
굳이 만드려고 하지는 않았는데 없어서 직접 만들었습니다.

최대한 심플하게 만들었습니다.

week.php : 일주일치 급식을 싱해옵니다.

week_db.php : 파싱해온걸 db에 넣어줍니다.

week_db_read.php : db에서 급식 리스트를 불러옵니다

마음대로 사용하시고 수정하셔도 되지만 코드 첫부분에 출처를 표기해 주세요!
GNU General Public License(GPL) 3.0

## 학교 코드
이 내용은 $schulCode 에 넣어주세요.

학교번호는 아래 링크에서 확인 가능합니다.

영어+숫자로 총 10글자 입니다. 예) 백제중학교 N100000505

https://www.meatwatch.go.kr/biz/bm/sel/schoolListPopup.do

## 교육청 코드
이 내용은 $officecode 에 넣어주세요
* 서울시 교육청 : sen.go.kr
* 경기도 교육청 : goe.go.kr
* 강원도 교육청 : kwe.go.kr
* 전라남도 교육청 : jne.go.kr
* 전라북도 교육청 : jbe.go.kr
* 경상남도 교육청 : gne.go.kr
* 경상북도 교육청 : kbe.go.kr
* 부산광역시 교육청 : pen.go.kr
* 제주자치도 교육청 : jje.go.kr
* 충청남도 교육청 : cne.go.kr
* 충청북도 교육청 : cbe.go.kr
* 광주광역시 교육청 : gen.go.kr
* 울산광역시 교육청 : use.go.kr
* 대전광역시 교육청 : dje.go.kr
* 인천광역시 교육청 : ice.go.kr
* 대구광역시 교육청 : dge.go.kr

## 학교 분류 코드
이 내용은 $schulScCode 에 넣어주세요
* 유치원 : 1
* 초등학교 : 2
* 중학교 : 3
* 고등학교 : 4

## 급식 종류 코드
이 내용은 $schMmealCode 에 넣어주세요
* 조식 : 1
* 중식 : 2
* 석식 : 3

## 응용 예제
http://bbshomepage.cf/daily_food/week 주간 급식예제

http://bbshomepage.cf/daily_food/month 월간 급식예제
* 월간급식을 불러오려면 $food_url에 sts_sci_md01_001.do을 sts_sci_md00_001.do으로 바꾸어 주시면 됩니다.
