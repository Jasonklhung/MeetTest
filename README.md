## 前製作業

.env檔案裡面有DB連線資訊&DB名稱 請先建立好

建立好DB後 輸入指令 
php artisan migrate (自動建立table)
php artisan db:seed (塞資料給需要的tabel EX: user資料&user權限)

基本使用者帳密
帳號 		   密碼
QA	 		   QA
RD   		   RD
PM   		   PM
Administrator  Administrator

網址 localhost/Meet/public/  (登入頁)

## Task 1
Phase I use case:

當使用者QA使用ticket tracking system系統,發現了程式上的bug,QA可以新增一個新的bug,並且寫下bug的摘要&描述,QA也可以編輯和刪除bug
只有RD可以解決bug,當RD修復好bug後,便可以在系統上將bug的狀態改成已解決

Phase II use case:

ticket有嚴重性跟優先級,讓使用者可以知道需要優先處理哪張ticket
只有PM可以新增類型為功能請求(Feature Request)的工單,RD新增完PM要求的功能後,可以上系統將其狀態改成已解決,並且只有RD有此權限
只有QA可以新增類型為測試工單(Test Case)的工單,並且只有QA自己可以解決此工單
最高權限管理者Administrator,擁有全部bug & ticket 的處理權限,並且可以新增其他使用者QA、RD、PM


## Task 2

使用PHP Laravel 完成,透過前置作業即可開始使用
前端使用html+css+bootstrap

### Task 3

- **[Class Diagram](https://docs.google.com/presentation/d/112LQuR2dJw88WQtOD_J_ycw_9kbNzakzxHGcgbJdQrs/edit?usp=sharing)**

## Task4

- **["API規格書"](https://docs.google.com/document/d/15x5SqQEdEoPtRSHovKi2f57CByWLla-RqSt7oqvclxg/edit?usp=sharing)**

