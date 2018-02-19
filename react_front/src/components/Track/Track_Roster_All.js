import React from 'react';
import { Link } from 'react-router-dom'

class Track_Roster_All extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			error: null,
			isLoaded: false,
			items: []
		};
		this.url = this.props.match.params.page ? `http://localhost/api/tracks/read_paging.php?page=${this.props.match.params.page}`: `http://localhost/api/tracks/read_paging.php`;
	}

	componentDidMount() {
		fetch(this.url)
			.then(res => res.json())
			.then(
				(result) => {
					console.log(result);
					this.setState({
						isLoaded: true,
						items : result
					});
				},
				(error) => {
					this.setState({
						isLoaded: true,
						error
					});
				}
			)
	}

	render() {
		const { error, isLoaded, items } = this.state;
		if (error) {
			return <div>Error: {error.message}</div>;
		} else if (!isLoaded) {
			return <div>Loading...</div>;
		} else {
			console.log(items);
			return (
				<div>
				<ul>
					{items.map(track => (
						<li	 key={track.id}>
							<Link to={`/Track/${track.id}`}>Name : <br/> {track.name}</Link>
							<p>Album : <br/> {track.album}</p>
							<p>Artist : <br/> {track.artist}</p>
							<p>Track No : <br/> {track.track_no}</p>
							<p>duration : <br/> {track.duration} </p>
							<p>Release Date : <br/> {track.release_date} </p>
							<audio controls="controls">
								<source src={track.mp3} type="audio/mpeg"/>
							</audio>
							<br/>
						</li>
					))}
				</ul>
					<div className="pagination">
						{items[items.length - 1]['paging']['pages'].map(page =>(
							<Link to={page.url} >{page.page}</Link>
						))}
					</div>
				</div>
			);
		}
	}
}

export default Track_Roster_All;