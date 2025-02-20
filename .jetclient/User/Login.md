```toml
name = 'Login'
method = 'POST'
url = 'https://tryphp.ddev.site/api/login'
sortWeight = 1000000
id = '1413847b-4d42-4df1-9046-c12dd7f08f2d'

[[headers]]
key = 'Accept'
value = 'application/json'

[body]
type = 'JSON'
raw = '''
{
  "email": "author1@example.com",
  "password": "passwor"
}'''
```
