```toml
name = 'Update'
method = 'PUT'
url = 'https://tryphp.ddev.site/api/posts/1'
sortWeight = 2000000
id = '54ceb480-fb04-4e19-9281-bae28b9bc4b6'

[[headers]]
key = 'Accept'
value = 'application/json'

[auth.bearer]
token = 'rBC68JhHxifgrdFBTdlYxyerX0HritWpGlT1V4XI82f1fb02'

[body]
type = 'JSON'
raw = '''
{
  "title": "Post 1 Update",
  "content": "Content 1 Update"
}'''
```
