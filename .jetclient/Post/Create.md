```toml
name = 'Create'
method = 'POST'
url = 'https://tryphp.ddev.site/api/posts'
sortWeight = 1000000
id = 'caa51c68-f7ae-4f2f-85a0-54e3a22d5b5d'

[[headers]]
key = 'Accept'
value = 'application/json'

[auth.bearer]
token = 'rBC68JhHxifgrdFBTdlYxyerX0HritWpGlT1V4XI82f1fb02'

[body]
type = 'JSON'
raw = '''
{
  "title": "Post 2",
  "content": "Content 2"
}'''
```
