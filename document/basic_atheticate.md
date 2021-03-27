ajax 라라벨 기본 인증

```
Route::group(['middleware' => ['auth']], function () {
  // laravel default Authentication with auth middleware
});
```

1. 라라벨 페이지에 처음 접속했을 때 laravel_session와 XSRF-TOKEN라는 쿠키가 세팅된다.

2. 로그인 된 상태이든 로그인 되지 않은 상태이든 API 통신을 하게 되면 쿠키의 laravel_session과 XSRF-TOKEN 값은 바뀐다.

3. ajax 통신을 할 때마다 laravel_session과 XSRF-TOKEN 값은 계속 변한다.

4. 라라벨의 기본 세션 드라이버는 파일 세션 storage\\framework\\sessions 위치에서 확인 가능하다.

5. 파일 세션에 들어 있는 토큰 값은 API 통신 여부에 관계 없이 일정하다.

6. 파일 세션에 들어 있는 각 유저에 대한 인증 파일은 로그인과 로그아웃시 새 파일로 교체 됨

7. 한 유저의 로그아웃에 파일이 2개가 삭제되고 새로 만들어지는 것으로 보아 laravel_session과 XSRF-TOKEN 각각에 대한 인증 정보인 듯

8. 쿠키에 기록된 세션 값과 파일 세션에 들어 있는 토큰 값이 다른 것으로 보아 모종의 변환 방법이 있는 것으로 보임
