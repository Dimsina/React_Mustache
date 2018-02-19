import React from 'react'
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom'
import Home from './Home'
import Artist from './Artist/Artist'
import Genre from './Genre/Genre'
import Track from './Track/Track'
import Album from './Album/Album'
import Search_Artist from './Search_Artist'
import Search_Genre from './Search_Genre'
import Search_Track from './Search_Track'
import Search_Album from './Search_Album'
class Main extends React.Component {
	render() {
		return(

				<Switch>
					<Route exact path='/' component={Home}/>
					<Route path='/Genre' component={Genre}/>
					<Route path='/Track' component={Track}/>
					<Route path='/Album' component={Album}/>
					<Route  path='/Artist' component={Artist}/>
					<Route path='/Search_Artist' component={Search_Artist}/>
					<Route path='/Search_Genre' component={Search_Genre}/>
					<Route path='/Search_Track' component={Search_Track}/>
					<Route path='/Search_Album' component={Search_Album}/>
				</Switch>
		)
	}
}

export default Main;