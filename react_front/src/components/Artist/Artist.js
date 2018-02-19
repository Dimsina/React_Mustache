import React from 'react'
import { Switch, Route } from 'react-router-dom'
import Artist_ById from './Artist_ById'
import Artist_Roster_All from './Artist_Roster_All'

const Artist = () => (
	<Switch>
		<Route exact path='/Artist' component={Artist_Roster_All} />
		<Route path='/Artist/page/:page' component={Artist_Roster_All}/>
		<Route path='/Artist/:id' component={Artist_ById}/>
	</Switch>
);

export default Artist;